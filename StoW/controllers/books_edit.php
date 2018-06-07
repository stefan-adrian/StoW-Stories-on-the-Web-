<?php

class Books_edit extends Controller
{
    function __construct()
    {
	parent::__construct();	
        
    }
	
    
    
    public function index() 
    {	
	$this->view->bookList = $this->model->bookList();
	$this->view->render('books_edit/index');
    }
    
    

    
    public function delete($id)
    {
    	$this->model->delete($id);
	header('location: ' . URL . 'books_edit');
    }
    
}