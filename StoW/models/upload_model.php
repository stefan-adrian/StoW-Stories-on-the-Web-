<?php

class Upload_Model extends Model
{
    public function __construct()
    {
		parent::__construct();
    }
    
    
    public function create($data)
    {
        
        
        $sth = $this->db->prepare('INSERT INTO books 
                                (`name`, `year`, `author`,`paperBookLink`,`audioBookLink`,`photoLink`) 
                                VALUES (:name, :year, :author,:paperBookLink,:audioBookLink, :photoLink)
                                ');
        $sth->execute(array(
			':name' => $data['bookName'],
			':year' => $data['year'],
			':author' => $data['author'],
                        ':paperBookLink' => $data['fileLink'],
                        ':audioBookLink' => $data['audioLink'],
                        ':photoLink' => $data['imageLink']
                        
                        ));

        
    }
    
    
    
    
}
