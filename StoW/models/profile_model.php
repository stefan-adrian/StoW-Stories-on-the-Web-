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
                $id=Session::get('id');
                
		$sth = $this->db->query("SELECT * FROM users
                                        WHERE users.id = $id");
                
                $sth->execute();
                $data = $sth->fetch();
                
                Session::set('username', $data['username']);
                Session::set('name',$data['name']);
                Session::set('surname',$data['surname']);
                Session::set('email', $data['email']);
                Session::set('age',$data['age']);
                
                $bookmark=$data['idBookmark'];
                if($bookmark!=NULL){
                    $sth = $this->db->query("SELECT * FROM bookmarks
                                            JOIN books on idBook=books.id 
                                            WHERE bookmarks.id = $bookmark");

                    $sth->execute();
                    $data2 = $sth->fetch();
                    Session::set('bookName',$data2['name']);
                }

                
		
	}
	
}