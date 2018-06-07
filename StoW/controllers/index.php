<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->model->bookList();
		$this->view->render('index/index');
		
	}
	
	function details() {
		$this->view->render('index/index');
	}
	function search(){
		if($_POST['cauta']==NULL){
			$this->model->bookList();
			header('location: ../index');}
			else {
				$this->model->search();		
				header('location: ../index');
				
			}

	}
	function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
	
}