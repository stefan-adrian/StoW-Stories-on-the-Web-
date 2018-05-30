<?php

class Register extends Controller {
    public $variabila="";
	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
		$this->view->render('register/index');
	}
	function checkValidity($data){
		if(empty($data['login']) || empty($data['password']) || empty($data['nume'])|| empty($data['prenume'])|| empty($data['varsta'])|| empty($data['email'])){
			echo 'Campuri goale.';
			$variabila = "ceva";
			return 0;
		}
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$error = "Email invalid";
			echo $error;
			return 0;
		}
		if(!is_numeric($data['varsta'])){
			$error = "Varsta nu este in formatul care trebuie";
			echo $error;
			return 0;
		}
		return 1;
	}
	public function create() 
	{

		$data = array();
		$data['login'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = 'default';
		$data['nume'] = $_POST['nume'];
		$data['prenume'] = $_POST['prenume'];
		$data['varsta'] = $_POST['varsta'];
		$data['email'] = $_POST['email'];

		if($this->checkValidity($data)){
		$this->model->create($data);
		header('location: ' . URL . 'login');
		}
	}
}