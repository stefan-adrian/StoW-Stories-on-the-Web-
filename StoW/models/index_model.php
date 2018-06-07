<?php


class Index_Model extends Model
{
	public function __construct()
	{

		parent::__construct();
    }
    public function bookList()
    {
		Session::init();
		$me=Session::get('me');
		$age=$me->getAge();
		$sth = $this->db->prepare("SELECT * FROM books where ageCategory<=$age");

		$sth->execute();
		$data=$sth->fetchAll();
		Session::set('bookList',$data);
    }
    
    public function search(){
		Session::init();
		$me=Session::get('me');
		$age=$me->getAge();
		$sth = $this->db->prepare("SELECT *  FROM books where name like '%".$_POST['cauta']."%' and ageCategory<=$age ");
		$sth->execute();
		$data= $sth->fetchAll();
		Session::set('bookList2',$data);
		Session::set('search',1);
    }
}