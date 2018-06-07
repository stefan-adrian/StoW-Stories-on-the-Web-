<?php

class Book_detail_edit extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->view->render('book_detail_edit/index');
    }
    
    function run()
    {
        $this->model->run();
    }
}
