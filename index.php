<?php
include "Controller/DaoConnexion.php";
include "keyword.php";
include "Controller/DaoKeyword.php";
include "categorie.php";
include "Controller/DaoCategorie.php";


$daoKeyword = new DaoKeyword();
$daoCategorie = new DaoCategorie();

if (isset($_GET["action"])){
  $action=$_GET["action"];
  echo "clique sur lien hypertext de creation d'un article";
  $listekw=$daoKeyword->getKeywords();
  $listecat=$daoCategorie->getCategories();
  include "creerarticle.php";
}

if (isset($_GET["action"])){
  $action=$_GET["action"];
  echo "clique sur lien hypertext pour visualiser les articles";
}
?>