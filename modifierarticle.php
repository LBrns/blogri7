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
                <a class="navbar-brand" href="index.php">Mon Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articles.php">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="creerarticle.php">Créer un article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="modifierarticle.php">Modifier un article</a>
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
            <div class="row">
                <div class="col-md-8">
                    <select class="form-select" aria-label="Default select example" style="margin-bottom: 1rem; width: rem;">
                        <option selected>Choisissez l'article que vous souhaitez modifier</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </div>
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
                <option selected>Choisissez une catégorie</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="form-select" aria-label="Default select example" style="margin-top: 1rem;">
                <option selected>Choisissez des mots clés</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </body>
</html>