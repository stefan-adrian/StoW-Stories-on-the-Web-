<?php

class Upload extends Controller
{
    function __construct()
    {
	parent::__construct();	
        
    }
	
    function index() 
    {	
	$this->view->render('upload/index');
    }
}