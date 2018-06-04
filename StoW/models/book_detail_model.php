<?php

class Book_Detail_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->run();
    }
    
    public function run()
    {
     $sth = $this->db->prepare("SELECT * FROM books WHERE 
				id=1");
     
     $sth->execute();
     $data = $sth->fetch();
     $book = new Book($data['id']);
     $count =  $sth->rowCount();
     
		if ($count > 0) {
			// login
			Session::init();
                        
                        $book->setId($data['id']);
                        $book->setYear($data['year']);
                        $book->setName($data['name']);
                        $book->setAuthor($data['author']);
                        $book->setThread($data['thread']);
                        $book->setPaperBookLink($data['paperBookLink']);
                        $book->setAudioBookLink($data['audioBookLink']);
                        $book->setPhotoLink($data['photoLink']);
                        
                        Session::set('thisBook',$book);
                        
			
			//header('location: ../dashboard');
		} else {
			//header('location: ../login');
                    echo "Eroare baza de date";
		}
    }
    
    
}