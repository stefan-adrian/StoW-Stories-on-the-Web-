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
		$ok=true;
			Session::destroy();
			Session::init();
			$ok=$this->model->userExist();
			if(empty($data['username']) || $ok==false){
			Session::set('emptyUsername','1');
                        }
			else Session::set('emptyUsername',$data['username']);
			if(empty($data['password'])){
			Session::set('emptyPassword','2');
			$ok=false;
			}
			else Session::set('emptyPassword',$data['password']);
			if(empty($data['name'])){
			Session::set('emptyName','3');
			$ok=false;
			}
			else Session::set('emptyName',$data['name']);
			if(empty($data['surname'])){
			Session::set('emptySurname','4');
			$ok=false;
			}
			else Session::set('emptySurname',$data['surname']);
			if(empty($data['age']) || !is_numeric($data['age'])){
			Session::set('emptyAge','5');
			$ok=false;
			}
			else if(is_numeric($data['age'])) {Session::set('emptyAge',$data['age']);}
			if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
				Session::set('emptyEmail','6');
				$ok=false;
			}
			else if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)) Session::set('emptyEmail',$data['email']);
			if($ok==false){
			header('location: ' . URL . 'register');
			return $ok;
			}
			else
			return $ok;
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