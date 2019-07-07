<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT * FROM users WHERE 
				username = :username AND password = MD5(:password)");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password']
		));
		$data = $sth->fetch();
                
                $user=new User1($data['id']);
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
                        
                        $user->setEmail($data['email']);
                        $user->setIdBookmark($data['idBookmark']);
                        $user->setName($data['name']);
                        $user->setSurname($data['surname']);
                        $user->setUsername($data['username']);
                        $user->setPassword($data['password']);
                        $user->setRole($data['role']);
                        $user->setAge($data['age']);
                        
                        Session::set('me',$user);
                        
			Session::set('role', $data['role']);
                        Session::set('id',$data['id']);
			Session::set('loggedIn', true);
			header('location: ../index');
		} else {
			header('location: ../login');
		}
		
	}
	
}