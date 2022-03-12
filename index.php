<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>FreeView</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FreeView</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Časová os</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projekt</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Účet</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Prihlásenie</a></li>
              <li><a class="dropdown-item" href="#">Registrácia</a></li>
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Jazyk</a></li>
              <li><a class="dropdown-item" href="#">Téma</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Zadajte hľadaný výraz" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Hľadať</button>
        </form>
      </div>
    </div>
  </nav>

  <aside class="aside-panel" id="aside-panel">
    <h1 class="aside-panel-title">Informácie</h1>
    <p>Username</p>
    <p>Uložené</p>
  </aside>

  <main id="timeline" class="timeline">
    <div id="newPost" class="newPost">
      <h1 class="newPost-title">Vytvoriť príspevok</h1>
      <form action="index.php" method="post">
        <textarea name="newPost-data" id="newPost-textarea" class="newPost-textarea" placeholder="Čo nového?"></textarea>
        <button type="submit" class="btn btn-light newPost-submit">Pridať</button>
      </form>
    </div>

    <div id="post" class="post">
      <p class="postText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eligendi dolores illum fugiat neque ducimus, nemo pariatur voluptas, voluptate quibusdam tempore in minus consectetur aliquam expedita nisi iste quasi molestias?</p>
      <section class="postSection">
        <p class="postFrom">From</p>
        <p class="postDate">Date</p>
        <p class="postLike">2</p>
        <p class="postSave">Uložiť</p>
      </section>
    </div>

    <div id="post" class="post">
      <p class="postText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eligendi dolores illum fugiat neque ducimus, nemo pariatur voluptas, voluptate quibusdam tempore in minus consectetur aliquam expedita nisi iste quasi molestias?</p>
      <section class="postSection">
        <p class="postFrom">From</p>
        <p class="postDate">Date</p>
        <p class="postLike">1</p>
        <p class="postSave">Uložiť</p>
      </section>
    </div>

    <div id="post" class="post">
      <p class="postText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eligendi dolores illum fugiat neque ducimus, nemo pariatur voluptas, voluptate quibusdam tempore in minus consectetur aliquam expedita nisi iste quasi molestias?</p>
      <section class="postSection">
        <p class="postFrom">From</p>
        <p class="postDate">Date</p>
        <p class="postLike">36</p>
        <p class="postSave">Uložiť</p>
      </section>
    </div>

    <div id="post" class="post">
      <p class="postText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eligendi dolores illum fugiat neque ducimus, nemo pariatur voluptas, voluptate quibusdam tempore in minus consectetur aliquam expedita nisi iste quasi molestias?</p>
      <section class="postSection">
        <p class="postFrom">From</p>
        <p class="postDate">Date</p>
        <p class="postLike">45</p>
        <p class="postSave">Uložiť</p>
      </section>
    </div>

    <div id="post" class="post">
      <p class="postText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eligendi dolores illum fugiat neque ducimus, nemo pariatur voluptas, voluptate quibusdam tempore in minus consectetur aliquam expedita nisi iste quasi molestias?</p>
      <section class="postSection">
        <p class="postFrom">From</p>
        <p class="postDate">Date</p>
        <p class="postLike">79</p>
        <p class="postSave">Uložiť</p>
      </section>
    </div>

  </main>
  
  <footer id="conclusion" class="conclusion">
    <h1 class="conclusion-title">FreeView 2022</h1>
  </footer>

  <script src="js/languages.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
  
?>
