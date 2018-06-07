<?php


class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
    }
    public function bookList()
    {
		
		$sth = $this->db->prepare("SELECT * FROM books");

		$sth->execute();
		return $sth->fetchAll();
    }
    
    public function search(){
		$sth = $this->db->prepare("SELECT *  FROM books where name like '%".$_POST['cauta']."%' ");
		$sth->execute();
		return $sth->fetchAll();
    }
}