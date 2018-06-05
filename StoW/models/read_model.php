<?php

class Read_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
                $this->run();
	}
        
        public function deletePreviousBookmark()
        {
            $me=Session::get('me');
            $idUser=$me->getId();
            $sth=$this->db->prepare("DELETE FROM bookmarks
                                    WHERE idUser=$idUser");
            $sth->execute();
            
            
        }
        
        public function setBookmark($page)
        {
            $me=Session::get('me');
            $thisBook=Session::get('thisBook');
            $sth = $this->db->prepare('INSERT INTO bookmarks 
                                (`idUser`, `idBook`,`page`) 
                                VALUES (:idUser, :idBook, :page)
                                ');
            $idUser=$me->getId();
            $idBook=$thisBook->getId();
            $sth->execute(array(
			':idUser' => $idUser,
			':idBook' => $idBook,
			':page' => $page
		));
            
            
            $sth2 = $this->db->query("SELECT id FROM bookmarks
                                            WHERE idUser = $idUser and idBook=$idBook and page=$page");

            $sth2->execute();
            $data = $sth2->fetch();
                    
            $idBookmark=$data['id'];
            
            $sth3=$this->db->prepare("UPDATE users
                                    SET idBookmark=$idBookmark
                                    WHERE id=$idUser");
            $sth3->execute();
            
            $me->setIdBookmark($idBookmark);
            Session::set('me',$me);
            
        }
                

	public function run()
	{
            
            Session::init();
            $text=Session::get('text');
            $page=Session::get('page');
            
            $url=$_SERVER['REQUEST_URI'];
            parse_str( parse_url( $url, PHP_URL_QUERY), $array );
            if (array_key_exists("page",$array)==1)
            {   
                
                $page=$array['page'];
                Session::set('page',$page);
                
            }
            
            
            if (array_key_exists("bookmarkSetted",$array)==1)
            {   
                $this->deletePreviousBookmark();
                $this->setBookmark($page);
                
            }
            
            $pageText=substr($text,($page-1)*5000,5000);
            
            
            Session::set('pageText',$pageText);
            
            
            
            	
	}
	
}