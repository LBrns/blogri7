<?php
class DaoKeyword extends DaoConnexion {
    //fonction pour recuperer les mots cles et les afficher dans la liste
    public function getKeywords() {
        $request = "SELECT * FROM keyword";
        try {
            $stmt = parent::$link->prepare($request);
            $stmt->execute();
        }
        catch (Exception $e) {
            echo "Erreur ! " . $e->getMessage();
        }
        $line = $stmt->fetch();
        $keyword = null;
        $listekw = array();
        while ($line != null) {
            $keyword = new Keyword($line["id_keyword"], $line ["nom_keyword"]);
            $listekw[] = $keyword;
            $line = $stmt->fetch();
        }
        return $listekw;
    } 
}
?>