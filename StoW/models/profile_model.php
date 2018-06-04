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
                    
                }

                
		
	}
	
}