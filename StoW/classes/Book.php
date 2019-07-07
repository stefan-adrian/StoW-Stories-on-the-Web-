<?php


class Book {
    private $id;
    private $name;
    private $year;
    private $author;
    private $thread;
    private $paperBookLink;
    private $audioBookLink;
    private $photoLink;
    private $ageCategory;
    
    function getAgeCategory() {
        return $this->ageCategory;
    }

    function setAgeCategory($ageCategory) {
        $this->ageCategory = $ageCategory;
    }

        
    function __construct($id) {
        $this->id = $id;
    }

    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getYear() {
        return $this->year;
    }

    function getAuthor() {
        return $this->author;
    }

    function getThread() {
        return $this->thread;
    }

    function getPaperBookLink() {
        return $this->paperBookLink;
    }

    function getAudioBookLink() {
        return $this->audioBookLink;
    }

    function getPhotoLink() {
        return $this->photoLink;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setThread($thread) {
        $this->thread = $thread;
    }

    function setPaperBookLink($paperBookLink) {
        $this->paperBookLink = $paperBookLink;
    }

    function setAudioBookLink($audioBookLink) {
        $this->audioBookLink = $audioBookLink;
    }

    function setPhotoLink($photoLink) {
        $this->photoLink = $photoLink;
    }


    
}