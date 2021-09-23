<?php
class DaoCategorie extends DaoConnexion {
    //fonction pour recuperer les mots cles et les afficher dans la liste
    public function getCategories() {
        $request = "SELECT * FROM categorie";
        try {
            $stmt = parent::$link->prepare($request);
            $stmt->execute();
        }
        catch (Exception $e) {
            echo "Erreur ! " . $e->getMessage();
        }
        $line = $stmt->fetch();
        $categorie = null;
        $listecat = array();
        while ($line != null) {
            $categorie = new Categorie($line["id_categorie"], $line ["nom_categorie"]);
            $listecat[] = $categorie;
            $line = $stmt->fetch();
        }
        return $listecat;
    } 
}
?>