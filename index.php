<?php
include "Controller/DaoConnexion.php";
include "Model/keyword.php";
//include "articles.php";
include "Controller/DaoKeyword.php";
include "Model/categorie.php";
include "Model/article.php";
include "Controller/DaoCategorie.php";
include "Controller/DaoArticle.php";


$daoKeyword = new DaoKeyword();
$daoCategorie = new DaoCategorie();
$daoArticle = new DaoArticle();



if (isset($_POST["action"])){
	$action=$_POST["action"];
	/*echo "vous avez soumis un formulaire"."</br>";*/
} else {
	if (isset($_GET["action"])){
		$action=$_GET["action"];
		echo "vous avez clique sur lien hypertext"."</br>";
	}
}




if ($action=="creer") {
  echo "on affiche le formulaire pour créer un article et on éxécute les fonctions qui récupérent les catégories et mots clés pour les afficher dans les select";
  $listekw=$daoKeyword->getKeywords();
  $listecat=$daoCategorie->getCategories();
  include "creerarticle.php";
}  
if ($action=="articles") {
  echo "clique sur lien hypertext pour visualiser les articles";
  $listeart=$daoArticle->getArticles();
  include "articles.php";
  var_dump($listeart);
}

?>