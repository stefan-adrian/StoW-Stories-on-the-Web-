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
			(`login`, `password`, `role` , `nume` , `prenume` , `varsta` , `email`) 
			VALUES (:login, :password, :role, :nume, :prenume, :varsta, :email)
			');
		
		$sth->execute(array(
			':login' => $data['login'],
			':password' => $data['password'],
			':role' => $data['role'],
			':nume' => $data['nume'],
			':prenume' => $data['prenume'],
			':varsta' => $data['varsta'],
			':email' => $data['email'],

		));
	}
}