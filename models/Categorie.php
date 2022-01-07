<?php

class Categorie{
  
    private $_ref;
    private $_nom;
    private $_description;
    
    public function __construct(string $ref, string $nom, string $description){

        $this -> ref = $ref;
        $this -> nom = $nom;
        $this -> description;
    }

    public function setRef($ref){
        $this -> ref = ref;
        return $this;

    }
    
    public function getRef(){
        return $this -> ref;
    }

    public function setNom($nom){
        $this -> nom = nom;
        return $this;

    }
    
    public function getNom(){
        return $this -> nom;
    }

    public function setDescription($descr){
        $this -> description = description;
        return $this;

    }
    
    public function getDescription(){
        return $this -> description;
    }
        
    
}

?>