<?php
//creation de la classe keyword
class Keyword {
    private $idkw;
    private $nomkw;

    //on cree le constructeur de la classe
    public function __construct(string $idkw, string $nomkw)
    {
        //initialisation des propriétés de l'objet de type keyword
        $this->_idkw = $idkw;
        $this->_nomkw = $nomkw;
    }

    //on definit les getters et setters pour acceder et retourner les differentes propriétés

        /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_idkw;
    }

    /**
     * @param mixed $_idkw
     *
     * @return self
     */ 
    public function setId($_idkw)
    {
        $this->_idkw = $_idkw;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nomkw;
    }

    /**
     * @param mixed $_nomkw
     *
     * @return self
     */
    public function setNom($_nomkw)
    {
        $this->_nomkw = $_nomkw;

        return $this;
    }



}


?>