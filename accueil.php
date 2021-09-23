<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <title>Blog</title>
  </head>
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
                      <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="articles.php">Articles</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?action=créer">Créer un article</a>
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
  <body>
      <div class="container text-primary" style="font-family: Arial, Helvetica, sans-serif; margin-top: 10rem; text-align: center;">
        <h1>Bienvenue sur mon blog</h1>
      </div>
  </body>
</html>
