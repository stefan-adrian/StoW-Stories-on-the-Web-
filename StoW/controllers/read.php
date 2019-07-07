<?php

class Read extends Controller{
    
    
    function __construct()
    {
		parent::__construct();	
    }
	
    function index() 
    {	
	$this->view->render('read/index');
    }
	
    function run()
    {
	$this->model->run();

    }
    
}