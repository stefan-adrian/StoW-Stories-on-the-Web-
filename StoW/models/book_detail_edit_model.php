<?php

class Book_Detail_Edit_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function run()
    {
            
        
        /*
            $sth = $this->db->prepare("SELECT * FROM books WHERE 
                			id=3"); //va trebuie schimbat 1 cu id-ul cartii care va fi cumva trimis cand dai click pe carte
            
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
                        $book->setPhotoLink($data['photoLink']);
                        $book->setAgeCategory($data['ageCategory']);
                        
                        Session::set('thisBook',$book);
                            
                        //citire din fisier
                        $xml=simplexml_load_file($data['paperBookLink']);
                        $text=(string)$xml->text;
                        $characters=(string)$xml->characters;
                        $description=(string)$xml->description;
                        $thread1=(string)$xml->thread1;
                        $thread2=(string)$xml->thread2;
                        $thread1Text=(string)$xml->thread1Text;
                        $thread2Text=(string)$xml->thread2Text;
                        $thread=0;
                        Session::set('text',$text);
                        Session::set('characters',$characters);
                        Session::set('description',$description);
                        Session::set('thread1',$thread1);
                        Session::set('thread2',$thread2);
                        Session::set('thread1Text',$thread1Text);
                        Session::set('thread2Text',$thread2Text);
                        Session::set('thread',$thread);
                        $numberOfPages=(int)((strlen($text)/1400)+1);
                        Session::set('numberOfPagesMainThread',$numberOfPages);
                        Session::set('numberOfPages',$numberOfPages);
                        $numberOfPagesThread1=(int)((strlen($thread1Text)/1400)+1);
                        Session::set('numberOfPagesThread1',$numberOfPagesThread1);
                        $numberOfPagesThread2=(int)((strlen($thread2Text)/1400)+1);
                        Session::set('numberOfPagesThread2',$numberOfPagesThread2);
                        
                        
                        $me=Session::get('me');
                        $page=1;
                        if($me->getIdBookmark()!=NULL)
                        {
                            $idBookmark=$me->getIdBookmark();
                            $sth2 = $this->db->query("SELECT page FROM bookmarks
                                                    WHERE id=$idBookmark");

                            $sth2->execute();
                            $data2 = $sth2->fetch();
                            
                            $count2=$sth2->rowCount();
                            if($count2>0)
                            {
                                $page=$data2['page'];
                            }
                        }
                        Session::set('page',$page);
                        
			
			//header('location: ../dashboard');
		} else {
			//header('location: ../login');
                    echo "Eroare baza de date.Cartea nu exista.";
		}
                
        */
    }
    
    
}