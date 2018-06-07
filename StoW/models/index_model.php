<?php


class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
    }
    public function bookList()
	{
		echo Session::get('loggedIn');
		if(Session::get('loggedIn') == true){
		
		echo 'sunt aici';
		$data=Session::get('me');
		$sth = $this->db->prepare("SELECT * FROM books ");
	}
		else
		{	echo Session::get('loggedIn');
			$sth = $this->db->prepare('SELECT * FROM books');
			echo 'sau aici';}
		$sth->execute();
		return $sth->fetchAll();
	}
	public function search(){
		$sth = $this->db->prepare("SELECT *  FROM books where name like '%".$_POST['cauta']."%' ");
		$sth->execute();
		return $sth->fetchAll();
	}
}