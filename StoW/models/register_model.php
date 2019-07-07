<?php

class Register_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function create($data)
	{
		$sth = $this->db->prepare('INSERT INTO users 
			(`username`, `password`, `role` , `name` , `surname` , `age` , `email`) 
			VALUES (:username, :password, :role, :name, :surname, :age, :email)
			');
		
		$sth->execute(array(
			':username' => $data['username'],
			':password' => $data['password'],
			':role' => $data['role'],
			':name' => $data['name'],
			':surname' => $data['surname'],
			':age' => $data['age'],
			':email' => $data['email']

		));
	}
	public function userExist(){
		$sth = $this->db->prepare("SELECT * FROM users WHERE 
				username = :username ");
		$sth->execute(array(
			':username' => $_POST['username']
		));
		Session::init();
		$var=$sth->fetch();
		$count =  $sth->rowCount();
		if($count>0){
			Session::set('ceva','ceva');
			return false;
		}
			else {
				Session::set('ceva','cevajkljklj');
				return true;}
	}
}