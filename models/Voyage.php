<?php 

class Voyage{

    private $ref;
    private $nom;
    private $accroche;
    private $prix;
    private $duree;
    private $img1;
    private $img2;
    private $img3;
    private $pdf;

    
    public function __construct(string $ref, string $nom, string $accroche, int $prix, int $duree, string $img1, string $img2, string $img3, string $pdf){

        $this->ref = $ref;
        $this->nom = $nom;
        $this->accroche = $accroche;
        $this->prix = $prix;
        $this->duree = $duree;
        $this->img1 = $img1;
        $this->img2 = $img2;
        $this->img3 = $img3;
        $this->pdf = $pdf;

    }



    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set the value of ref
     *
     * @return  self
     */ 
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of accroche
     */ 
    public function getAccroche()
    {
        return $this->accroche;
    }

    /**
     * Set the value of accroche
     *
     * @return  self
     */ 
    public function setAccroche($accroche)
    {
        $this->accroche = $accroche;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of img1
     */ 
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * Set the value of img1
     *
     * @return  self
     */ 
    public function setImg1($img1)
    {
        $this->img1 = $img1;

        return $this;
    }

    /**
     * Get the value of img2
     */ 
    public function getImg2()
    {
        return $this->img2;
    }

    /**
     * Set the value of img2
     *
     * @return  self
     */ 
    public function setImg2($img2)
    {
        $this->img2 = $img2;

        return $this;
    }

    /**
     * Get the value of img3
     */ 
    public function getImg3()
    {
        return $this->img3;
    }

    /**
     * Set the value of img3
     *
     * @return  self
     */ 
    public function setImg3($img3)
    {
        $this->img3 = $img3;

        return $this;
    }

    /**
     * Get the value of pdf
     */ 
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set the value of pdf
     *
     * @return  self
     */ 
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }
}

?>