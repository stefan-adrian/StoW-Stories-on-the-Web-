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
		$sth = $this->db->prepare("SELECT * FROM books where ageCategory<= :age");

                
		$sth->execute(array(
			':age' => $age
		));

                
		$sth->execute();
		$data=$sth->fetchAll();
		Session::set('bookList',$data);
    }
    
    public function search(){
		Session::init();
		$me=Session::get('me');
		$age=$me->getAge();
		$sth = $this->db->prepare("SELECT *  FROM books where name like :cauta and ageCategory<=:age ");
                
                $ch='%';
                $cauta=$ch.$_POST['cauta'].$ch;
                    
		$sth->execute(array(
			':age' => $age,
                        ':cauta' => $cauta
		));
                
                
                

                
                
                $data= $sth->fetchAll();
		Session::set('bookList2',$data);
		Session::set('search',1);
		Session::set('searchText',$_POST['cauta']);
    }
}