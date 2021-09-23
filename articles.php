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
                        <a class="nav-link active" href="articles.php">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="creerarticle.php">Créer un article</a>
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
            <div class="container" style="margin-top: 2rem;">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Lire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Lire</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </body>
</html>