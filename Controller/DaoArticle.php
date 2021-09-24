<?php
class DaoArticle extends DaoConnexion {
    //fonction pour recuperer les articles et les afficher sur la page article.php par ordre de publication
    public function getArticles() {
        $request = "SELECT * FROM article ORDER BY date_article DESC";

        try {
            $stmt = parent::$link->prepare($request);
            $stmt->execute();
        }
        catch (Exception $e) {
            echo "Erreur ! " . $e->getMessage();
        }
        $line = $stmt->fetch();
        $article = null;
        $listeart = array();
        while ($line != null) {
            $article = new Article($line["id_article"], $line ["titre_article"], $line ["contenu_article"], $line ["auteur_article"], $line ["date_article"], $line ["image_article"]);
            $listeart[] = $article;
            $line = $stmt->fetch();
        }
        return $listeart;
        
    }
    
}

?>