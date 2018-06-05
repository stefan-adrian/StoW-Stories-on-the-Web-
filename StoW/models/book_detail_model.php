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
				id=1"); //va trebuie schimbat 1 cu id-ul cartii care va fi cumva trimis cand dai click pe carte
     
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
                        Session::set('page',1);//va trebuie pus bookmarkul cartii care o sa il initializam mereu cu 1
                        
                        
                        Session::init();
                        
                        $xml=simplexml_load_file($data['paperBookLink']);
                        $text=(string)$xml->text;
                        $characters=(string)$xml->characters;
                        $description=(string)$xml->description;
                        Session::set('text',$text);
                        Session::set('characters',$characters);
                        Session::set('description',$description);
                        $numberOfPages=(int)((strlen($text)/5000)+1);
                        Session::set('numberOfPages',$numberOfPages);
                        
			
			//header('location: ../dashboard');
		} else {
			//header('location: ../login');
                    echo "Eroare baza de date";
		}
    }
    
    
}