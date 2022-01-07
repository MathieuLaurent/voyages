<?php

class Categorie{
  
    private $_ref;
    private $_nom;
    private $_description;
    
    public function __construct(string $ref, string $nom, string $description){

        $this -> _ref = $ref;
        $this -> _nom = $nom;
        $this -> _description = $description;
    }

    public function setRef($ref){
        $this -> _ref = $ref;
        return $this;

    }
    
    public function getRef(){
        return $this -> _ref;
    }

    public function setNom($nom){
        $this -> _nom = $nom;
        return $this;

    }
    
    public function getNom(){
        return $this -> _nom;
    }

    public function setDescription($description){
        $this -> _description = $description;
        return $this;

    }
    
    public function getDescription(){
        return $this -> _description;
    }
        
    
}

?>