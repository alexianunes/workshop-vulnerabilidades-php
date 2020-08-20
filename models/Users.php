<?php
class Users extends Model {

	private $uid;

	public function verificarLogin() {
		if(!empty($_SESSION['loginhash'])) {
			$s = $_SESSION['loginhash'];

			$sql = "SELECT * FROM users WHERE loginhash = :hash";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":hash", $s);
			$sql->execute();

			if($sql->rowCount() > 0) {
				$data = $sql->fetch();
				$this->uid = $data['id'];

				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	// public function validarUsername($u) {
	// 	if(preg_match('/^[a-z0-9]+$/', $u)) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	public function userExiste($u) {

		$sql = "SELECT * FROM users WHERE username = :u";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":u", $u);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}

	}

	public function registrarUserExporDados($nome, $email, $username, $pass, $cpf, $tel, $cel, $cep, $ende, $bairro, $cid, $uf, $num_cartao, $cod_seguranca, $dt_validade) {

		$sql = "INSERT INTO users (nome, email, username, senha, cpf, telefone, celular, cep, endereco, bairro, cidade, uf, num_cartao, cod_seguranca, dt_validade) VALUES (:nome, :email, :username, :pass, :cpf, :tel, :cel, :cep, :ende, :bairro, :cid, :uf, :num_cartao, :cod_seguranca, :dt_validade)";
		
		$sql = $this->db->prepare($sql);

		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":username", $username);
		$sql->bindValue(":pass", $pass);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":ende", $ende);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":cid", $cid);
		$sql->bindValue(":uf", $uf);
		$sql->bindValue(":num_cartao", $num_cartao);
		$sql->bindValue(":cod_seguranca", $cod_seguranca);
		$sql->bindValue(":dt_validade", $dt_validade);

		$sql->execute();
	}

	public function registrarUser($nome, $email, $username, $pass, $cpf, $tel, $cel, $cep, $ende, $bairro, $cid, $uf, $num_cartao, $cod_seguranca, $dt_validade) {

		//BCRYPT SENHA
		$newpass = password_hash($pass, PASSWORD_DEFAULT);

		//CRIPTOGRAFAR DADOS DO CARTÃO 
		$privKey = file_get_contents(BASE_URL.'/keys/private.pem');
		$encryptedNumCartao = "";
		$encryptedCodSeguranca = "";
		$encryptedDtValidade = "";
		openssl_private_encrypt($num_cartao, $encryptedNumCartao, $privKey);
		openssl_private_encrypt($cod_seguranca, $encryptedCodSeguranca, $privKey);
		openssl_private_encrypt($dt_validade, $encryptedDtValidade, $privKey);

		

		$sql = "INSERT INTO users (nome, email, username, senha, cpf, telefone, celular, cep, endereco, bairro, cidade, uf, num_cartao, cod_seguranca, dt_validade) VALUES (:nome, :email, :username, :pass, :cpf, :tel, :cel, :cep, :ende, :bairro, :cid, :uf, :num_cartao, :cod_seguranca, :dt_validade)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":username", $username);
		$sql->bindValue(":pass", $newpass);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":ende", $ende);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":cid", $cid);
		$sql->bindValue(":uf", $uf);
		$sql->bindValue(":num_cartao", $encryptedNumCartao);
		$sql->bindValue(":cod_seguranca", $encryptedCodSeguranca);
		$sql->bindValue(":dt_validade", $encryptedDtValidade);
		$sql->execute();
	}

	public function validarUserSQLInjection($username, $pass) {

		$sql = "SELECT * FROM users WHERE username = '$username' AND senha = '$pass' ";
		// ' OR '1'='1
		// $sql = "SELECT * FROM users WHERE username = '' OR '1' = '1' AND senha = '' OR '1' = '1' ";
		// $sql = "SELECT * FROM users WHERE username = '' or '1'='1' AND senha = '' OR '1'='1'; DELETE FROM users WHERE '1' = '1'";
		// echo $sql;exit;
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {

			$info = $sql->fetch();
			$loginhash = md5(rand(0,99999).time().$info['id'].$info['username']);

			$this->setLoginHash($info['id'], $loginhash);
			$_SESSION['loginhash'] = $loginhash;

			return true;

		} else {
			return false;
		}

	}

	public function validarUser($username, $pass) {

		$sql = "SELECT * FROM users WHERE username = :username";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":username", $username);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$info = $sql->fetch();

			if(password_verify($pass, $info['senha'])) {
				$loginhash = md5(rand(0,99999).time().$info['id'].$info['username']);

				$this->setLoginHash($info['id'], $loginhash);
				$_SESSION['loginhash'] = $loginhash;

				return true;

			} else {
				return false;
			}

		} else {
			return false;
		}

	}

	private function setLoginHash($uid, $hash) {

		$sql = "UPDATE users SET loginhash = :hash WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":hash", $hash);
		$sql->bindValue(":id", $uid);
		$sql->execute();

	}

	public function clearLoginHash() {
		$_SESSION['loginhash'] = '';
	}

	public function getName() {

		$sql = "SELECT username FROM users WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $this->uid);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			return $data['username'];
		}

		return '';
	}

	public function getDadosUser() {

		$sql = "SELECT * FROM users WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $this->uid);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			return $data;
		}

		return '';
	}

	public function descriptografarCartao() {
		$sql = "SELECT num_cartao, cod_seguranca, dt_validade FROM users WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $this->uid);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			$pubKey = file_get_contents(BASE_URL.'/keys/public.pem');
			$decryptedNumCartao = "";
			$decryptedCodSeguranca = "";
			$decryptedDtValidade = "";
			openssl_public_decrypt($data['num_cartao'], $decryptedNumCartao, $pubKey);
			openssl_public_decrypt($data['cod_seguranca'], $decryptedCodSeguranca, $pubKey);
			openssl_public_decrypt($data['dt_validade'], $decryptedDtValidade, $pubKey);

			$dadosDescriptografados = [$decryptedNumCartao, $decryptedCodSeguranca, $decryptedDtValidade];
			
			return $dadosDescriptografados;
		}

		return '';
	}

	



}









