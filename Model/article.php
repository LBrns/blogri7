<?php
//creation de la classe article
class Article {
    private $idart;
    private $titreart;
    private $contenuart;
    private $auteurart;
    private $dateart;
    private $imageart;

    //on cree le constructeur de la classe
    public function __construct(string $idart, string $titreart, string $contenuart, string $auteurart, string $dateart, string $imageart)
    {
        //initialisation des propriétés de l'objet de type article
        $this->_idart = $idart;
        $this->_titreart = $titreart;
        $this->_contenuart = $contenuart;
        $this->_auteurart = $auteurart;
        $this->_dateart = $dateart;
        $this->_imageart = $imageart;
    
    
    }

    //on definit les getters et setters pour acceder et retourner les differentes propriétés

            /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_idart;
    }

    /**
     * @param mixed $_idart
     *
     * @return self
     */ 
    public function setId($_idart)
    {
        $this->_idart = $_idart;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->_titreart;
    }

    /**
     * @param mixed $_titreart
     *
     * @return self
     */
    public function setTitre($_titreart)
    {
        $this->_titreart = $_titreart;

        return $this;
    }

        /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->_contenuart;
    }

    /**
     * @param mixed $_contenuart
     *
     * @return self
     */
    public function setContenu($_contenuart)
    {
        $this->_contenuart = $_contenuart;

        return $this;
    }

            /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->_auteurart;
    }

    /**
     * @param mixed $_auteurart
     *
     * @return self
     */
    public function setAuteur($_auteurart)
    {
        $this->_auteurart = $_auteurart;

        return $this;
    }

                /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_dateart;
    }

    /**
     * @param mixed $_dateart
     *
     * @return self
     */
    public function setDate($_dateart)
    {
        $this->_dateart = $_dateart;

        return $this;
    }

                    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_imageart;
    }

    /**
     * @param mixed $_imageart
     *
     * @return self
     */
    public function setImage($_imageart)
    {
        $this->_imageart = $_imageart;

        return $this;
    }

}


?>