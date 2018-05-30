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
		if(empty($data['username']) || empty($data['password']) || empty($data['name'])|| empty($data['surname'])|| empty($data['age'])|| empty($data['email'])){
			echo 'Campuri goale.';
			return 0;
		}
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$error = "Email invalid";
			echo $error;
			return 0;
		}
		if(!is_numeric($data['age'])){
			$error = "Varsta nu este in formatul care trebuie";
			echo $error;
			return 0;
		}
		return 1;
	}
	public function create() 
	{

		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = 'user';
		$data['name'] = $_POST['name'];
		$data['surname'] = $_POST['surname'];
		$data['age'] = $_POST['age'];
		$data['email'] = $_POST['email'];

		if($this->checkValidity($data)){
		$this->model->create($data);
		header('location: ' . URL . 'login');
		}
	}
}