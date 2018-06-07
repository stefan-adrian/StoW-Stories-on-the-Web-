<?php

class Book_Detail_Edit_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function run($data)
    {
        Session::init();
        $thisBook=Session::get('thisBook');
        $path=$thisBook->getPaperBookLink();
        $idBook=$thisBook->getId();
        
        
        
        $xml = simplexml_load_file($path);
        $xml->bookName= $data['bookTitle'];
        $xml->author= $data['author'];
        $xml->year= $data['year'];
        $xml->characters= $data['characters'];
        $xml->description= $data['description'];
        $xml->ageCategory= $data['ageCategory'];
        file_put_contents($path, $xml->saveXML());
        
        $ageCategory=(int)$xml->ageCategory;
        $year=(int)$xml->year;
        $name=(string)$xml->bookName;
        $author=(string)$xml->author;

                                
        $sth = $this->db->prepare("UPDATE books 
                                   SET name=:name, author=:author, ageCategory=:ageCategory, year=:year
                                   WHERE id=:id"); 
        
        $sth->execute(array(
			':name' => $data['bookTitle'],
			':author' => $data['author'],
			':ageCategory' => $data['ageCategory'],
                        ':year' => $data['year'],
                        ':id' => $idBook
		));
        
        
    }
    
    
}