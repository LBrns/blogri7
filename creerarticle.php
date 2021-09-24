<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Blog</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                <a class="navbar-brand" href="accueil.php">Mon Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articles.php">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="creerarticle.php">Créer un article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modifierarticle.php">Modifier un article</a>
                    </li>
                    </ul>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </nav>
        </header>
        <div class="container" style="margin-top: 3rem;">
            <div class="mb-3">
                <label class="form-label">Titre de l'article</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contenu de l'article</label>
                <textarea class="form-control" id="" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Auteur de l'article</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="mb-3" style="width: 15rem;">
                <label class="form-label">Date de création de l'article</label>
                <input type="date" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" id="">
            </div>
            <select class="form-select" aria-label="Default select example">
                <?php
                if ($idselection=="") echo "<option disabled selected>Catégorie</option>"; else echo "<option disabled>Catégorie</option>";
				foreach($listecat as $categorie) {
				    if ($idselection==$categorie->getId()) echo "<option value=".$categorie->getId()." selected>".$categorie->getNom()."</option>";else echo "<option value=".$categorie->getId().">".$categorie->getNom()."</option>";
                    }
                ?>
            </select>
            <select multiple class="form-select" aria-label="Default select example" style="margin-top: 1rem; margin-bottom: 1rem;">
                <?php 
				if ($idselection=="") echo "<option disabled selected>Mots clé</option>"; else echo "<option disabled>Mots clé</option>";
				foreach($listekw as $keyword) {
				    if ($idselection==$keyword->getId()) echo "<option value=".$keyword->getId()." selected>".$keyword->getNom()."</option>";else echo "<option value=".$keyword->getId().">".$keyword->getNom()."</option>";
                    }
                
			    ?>
            </select>
        </div>
    </body>
</html>