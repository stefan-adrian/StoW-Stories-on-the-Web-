<?php

class Book_detail extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->view->render('book_detail/index');
    }
    
    function run()
    {
        $this->model->run();
    }
}
