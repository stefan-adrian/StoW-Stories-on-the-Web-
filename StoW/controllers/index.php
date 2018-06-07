<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->bookList = $this->model->bookList();
		$this->view->render('index/index');
		
	}
	
	function details() {
		$this->view->render('index/index');
	}
	function search(){
		if($_POST['cauta']==NULL){
			$this->view->bookList=$this->model->bookList();
			$this->view->render('index/index');}
			else {
				$this->view->bookList=$this->model->search();
				$this->view->render('index/index');
				
			}

	}
	
}