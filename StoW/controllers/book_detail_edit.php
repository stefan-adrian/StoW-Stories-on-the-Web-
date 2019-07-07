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
        $data = array();
	$data['bookTitle'] = $_POST['bookTitle'];
        $data['author'] = $_POST['author'];
	$data['year'] = $_POST['year'];
	$data['characters'] = $_POST['characters'];
	$data['ageCategory'] = $_POST['ageCategory'];
	$data['description'] = $_POST['description'];

        $this->model->run($data);
        Session::init();
        $thisBook=Session::get('thisBook');
        $id=$thisBook->getId();
        header('location: ' . URL . 'book_detail?idBook='.$id);
    }
}
