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
        Session::init();
        Session::set('uploadImageOk',0);
        $target_dir = "public/bookImages/";
        $target_file = $target_dir . basename($_FILES["bookImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
            $check = getimagesize($_FILES["bookImage"]["tmp_name"]);
            if($check !== false) {
                
                $uploadOk = 1;
        } else {
            echo "File is not an image.";
            return;
            $uploadOk = 0;
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, the image already exists";
            return;
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["bookImage"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            return;
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            return;
            $uploadOk = 0;
        }
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return;
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target_file)) {
                
                Session::set('uploadImageOk',1);
                } else {
            echo "Sorry, there was an error uploading your file.";
                }
        }
        
        
        return $target_file;
    }
    
    
    public function uploadFile()
    {
        Session::init();
        Session::set('uploadFileOk',0);
        $target_dir = "public/bookFiles/";
        $target_file = $target_dir . basename($_FILES["paperBookLink"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, the file already exists";
            $uploadOk = 0;
            return;
        }
        
        // Allow certain file formats
        if($fileType != "xml" ) {
            echo "Sorry, only XML files are allowed.";
            $uploadOk = 0;
            return;
        }
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            return;
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["paperBookLink"]["tmp_name"], $target_file)) {
                Session::set('uploadFileOk',1);
                } 
        }
        
        return $target_file;
    }
    
    
    

    
    public function create()
    {
        $data = array();
        Session::init();
        
        $data['fileLink'] = $this->uploadFile();
        if(Session::get('uploadFileOk')==1)
        {
            $data['imageLink'] = $this->uploadImage();
        }
        if(Session::get('uploadFileOk')==1&&Session::get('uploadImageOk')==0){

            unlink($data['fileLink']);
        }
        
        if(Session::get('uploadImageOk')==1&&Session::get('uploadFileOk')==1)
        {
            echo 'am ajuns unde nu trebuia';
            $xml=simplexml_load_file($data['fileLink']);
            $data['bookName'] = $xml->bookName;
            $data['year'] = $xml->year;
            $data['author'] = $xml->author;
            $data['ageCategory']=$xml->ageCategory;
        
            $this->model->create($data);
            //header('location: ' . URL . 'upload');
        }
    }
    
}