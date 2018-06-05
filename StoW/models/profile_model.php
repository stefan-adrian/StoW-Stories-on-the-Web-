<?php

class Profile_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
                $this->run();
	}

	public function run()
	{
                Session::init();
                $me=Session::get('me');
                
                $bookmark=$me->getIdBookmark();
                
                if($bookmark!=NULL){
                    $sth = $this->db->query("SELECT * FROM bookmarks
                                            JOIN books on idBook=books.id 
                                            WHERE bookmarks.id = $bookmark");

                    $sth->execute();
                    $data = $sth->fetch();
                    Session::set('bookName',$data['name']);
                    
                    $page=$data['page'];
                    
                    
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
                    Session::set('thread',$thread);
                    $numberOfPages=(int)((strlen($text)/5000)+1);
                    Session::set('numberOfPages',$numberOfPages);
                    
                    
                    Session::set('page',$page);
                    
                    
                }

                
		
	}
	
}