<?php

class Register extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
		$this->view->render('register/index');
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

		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
  			$emailErr = "Invalid email format"; 
  			echo $emailErr;

		}
		else{
		
		// @TODO: Do your error checking!
		
		$this->model->create($data);
		header('location: ' . URL . 'login');
		}
	}
}