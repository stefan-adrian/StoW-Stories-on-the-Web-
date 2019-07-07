<?php

class Profile extends Controller{
    
    
    function __construct()
    {
		parent::__construct();	
    }
	
    function index() 
    {	
	$this->view->render('profile/index');
    }
	
    function run()
    {
	$this->model->run();

    }
    
}
