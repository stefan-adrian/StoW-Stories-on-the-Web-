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
                        
                        //citire din fisier
                        $xml=simplexml_load_file($data['paperBookLink']);
                        $text=(string)$xml->text;
                        $characters=(string)$xml->characters;
                        $description=(string)$xml->description;
                        Session::set('text',$text);
                        Session::set('characters',$characters);
                        Session::set('description',$description);
                        $numberOfPages=(int)((strlen($text)/5000)+1);
                        Session::set('numberOfPages',$numberOfPages);
                        
                        
                        $me=Session::get('me');
                        $page=1;
                        if($me->getIdBookmark()!=NULL)
                        {
                            $idBookmark=$me->getIdBookmark();
                            $sth2 = $this->db->query("SELECT page FROM bookmarks
                                                    WHERE id=$idBookmark");

                            $sth2->execute();
                            $data2 = $sth2->fetch();
                    
                            $page=$data2['page'];
                        }
                        Session::set('page',$page);
                        
			
			//header('location: ../dashboard');
		} else {
			//header('location: ../login');
                    echo "Eroare baza de date";
		}
    }
    
    
}