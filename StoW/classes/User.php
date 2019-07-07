<?php


class User1 {
    
    private $id;
    private $username;
    private $name;
    private $surname;
    private $password;
    private $email;
    private $idBookmark;
    private $role;
    private $age;
    
    
    function __construct($id) {
        $this->id = $id;
    }

    
    function getId() {
        return $this->id;
    }
    
    function getAge() {
        return $this->age;
    }

    function getUsername() {
        return $this->username;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getIdBookmark() {
        return $this->idBookmark;
    }

    function getRole() {
        return $this->role;
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function setAge($age) {
        $this->age = $age;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setIdBookmark($idBookmark) {
        $this->idBookmark = $idBookmark;
    }

    function setRole($role) {
        $this->role = $role;
    }


    

    
}
