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
    
    
    public function uploadImage()
    {
        
        $target_dir = "public/bookImages/";
        $target_file = $target_dir . basename($_FILES["bookImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
            $check = getimagesize($_FILES["bookImage"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["bookImage"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["bookImage"]["name"]). " has been uploaded.";
                } else {
            echo "Sorry, there was an error uploading your file.";
                }
        }
        
        
        return $target_file;
    }
    
    
    public function uploadFile()
    {
        
        $target_dir = "public/bookFiles/";
        $target_file = $target_dir . basename($_FILES["paperBookLink"]["name"]);
        $uploadOk = 1;
        
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        /*// Check file size
        if ($_FILES["paperBookLink"]["size"] > 5600000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }*/
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["paperBookLink"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["paperBookLink"]["name"]). " has been uploaded.";
                } else {
            echo "Sorry, there was an error uploading your file.";
                }
        }
        
        return $target_file;
    }
    
    
    

    
    public function create()
    {
        $data = array();
        
        $data['imageLink'] = $this->uploadImage();
        $data['fileLink'] = $this->uploadFile();
        
        
        $xml=simplexml_load_file($data['fileLink']);
        $data['bookName'] = $xml->bookName;
        $data['year'] = $xml->year;
	$data['author'] = $xml->author;
        $data['ageCategory']=$xml->ageCategory;
        
	$this->model->create($data);
	header('location: ' . URL . 'upload');
    }
    
}