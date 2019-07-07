<?php

class Books_Edit_Model extends Model
{
    public function __construct()
    {
		parent::__construct();
    }
    
    public function bookList()
    {
        $sth = $this->db->prepare('SELECT id, name, author FROM books');
        $sth->execute();
	return $sth->fetchAll();
    }
    
    public function delete($id)
    {
        $sth1 = $this->db->prepare('SELECT * FROM books WHERE id = :id');
	$sth1->execute(array(
			':id' => $id
                	));
        $data = $sth1->fetch();
        unlink($data['paperBookLink']);
        unlink($data['photoLink']);
        
        
	$sth = $this->db->prepare('DELETE FROM books WHERE id = :id');
	$sth->execute(array(
			':id' => $id
                	));
    }
    
    
    
    
}
