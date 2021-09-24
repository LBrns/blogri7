<?php
//creation de la classe categorie
class Categorie {
    private $idcat;
    private $nomcat;

    //on cree le constructeur de la classe
    public function __construct(string $idcat, string $nomcat)
    {
        //initialisation des propriétés de l'objet de type categorie
        $this->_idcat = $idcat;
        $this->_nomcat = $nomcat;
    }

    //on definit les getters et setters pour acceder et retourner les differentes propriétés

        /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_idcat;
    }

    /**
     * @param mixed $_idcat
     *
     * @return self
     */ 
    public function setId($_idcat)
    {
        $this->_idcat = $_idcat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nomcat;
    }

    /**
     * @param mixed $_nomcat
     *
     * @return self
     */
    public function setNom($_nomcat)
    {
        $this->_nomcat = $_nomcat;

        return $this;
    }



}


?>