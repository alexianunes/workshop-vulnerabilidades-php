<?php
class homeController extends controller {

	private $user;

	public function __construct() {
		$this->user = new Users();

		
		if(!$this->user->verificarLogin()) {
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

	public function index() {
		
		$data = array(
			'name' => $this->user->getDadosUser()['username'],
			'num_cartao' => $this->user->getDadosUser()['num_cartao'],
			'cod_seguranca' => $this->user->getDadosUser()['cod_seguranca'],
			'dt_validade' => implode("/",array_reverse(explode("-",$this->user->getDadosUser()['dt_validade'])))
		);

		// $data = array(
		// 	'name' => $this->user->getDadosUser()['username'],
		// 	'num_cartao' => $this->user->descriptografarCartao()[0],
		// 	'cod_seguranca' => $this->user->descriptografarCartao()[1],
		// 	'dt_validade' => implode("/",array_reverse(explode("-",$this->user->descriptografarCartao()[2])))
		// );

		// $this->loadTemplate('home', $data);

	}

}