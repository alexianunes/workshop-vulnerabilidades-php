<?php
class loginController extends controller {

	public function index() {
		$data = array(
			'msg' => ''
		);

		if(!empty($_GET['error'])) {
			if($_GET['error'] == '1') {
				$data['msg'] = 'Usuário e/ou senha inválidos!';
				$data['alertTipo'] = 'alert-danger';
			}
		}

		$this->loadView('login', $data);
	}

	public function logar() {

		if(!empty($_POST['username'])) {
			$username = strtolower($_POST['username']);
			$pass = $_POST['pass'];

			$users = new Users();
			//$users->validarUser($username, $pass)
			// $users->validarUserSQLInjection($username, $pass)
			if($users->validarUserSQLInjection($username, $pass)) {
				header("Location: ".BASE_URL);
				exit;
			} else {
				header("Location: ".BASE_URL.'login?error=1');
				exit;
			}
		} else {
			header("Location: ".BASE_URL.'login');
			exit;
		}

	}

	public function cadastrar() {
		$data = array(
			'msg' => ''
		);

		if(!empty($_POST['username'])) {
			$username = strtolower($_POST['username']);
			$pass = $_POST['pass'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$cpf = $_POST['cpf'];
			$tel = $_POST['telefone'];
			$cel = $_POST['celular'];
			$cep = $_POST['cep'];
			$ende = $_POST['rua'];
			$bairro = $_POST['bairro'];
			$cid = $_POST['cidade'];
			$uf = $_POST['uf'];
			$num_cartao = $_POST['num_cartao'];
			$cod_seguranca = $_POST['cod_seguranca'];
			$dt_validade = implode("-",array_reverse(explode("/",$_POST['dt_validade'])));

			$users = new Users();

			if(!$users->userExiste($username)) {

				$users->registrarUserExporDados($nome, $email, $username, $pass, $cpf, $tel, $cel, $cep, $ende, $bairro, $cid, $uf, $num_cartao, $cod_seguranca, $dt_validade);
				// $users->registrarUser($nome, $email, $username, $pass, $cpf, $tel, $cel, $cep, $ende, $bairro, $cid, $uf, $num_cartao, $cod_seguranca, $dt_validade);

				$data['msg'] = 'Cadastro Realizado com Sucesso';
				$data['alertTipo'] = 'alert-success';

				$this->loadView('login', $data);

				// header("Location: ".BASE_URL."login");
			} else {
				$data['msg'] = 'Usuário já existente!';
				$data['alertTipo'] = 'alert-warning';
				$this->loadView('cadastrar', $data);
			}
		}else{
			$this->loadView('cadastrar', $data);
		}


		
	}

	public function logout() {
		$users = new Users();
		$users->clearLoginHash();

		header("Location: ".BASE_URL.'login');
	}

}
















