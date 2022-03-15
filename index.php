<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/languages.js"></script>
    <script src="js/time.js"></script>
    <script src="js/theme.js"></script>
    <title>FreeView Domov</title>
</head>
<body>

  <?php
    session_start();
    if(!isset($_SESSION["login"])) {
      echo "<script>location.href='login.php'</script>";  
      die("Neste prihláseny!");
    }
  ?>


  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FreeView</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link langTimeline active" aria-current="page" href="index.php">Časová os</a>
          </li>
          <li class="nav-item">
            <a class="nav-link langProject" href="projekt.html">Projekt</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle langAccount" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Účet</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item langLogout" href="logout.php">Odhlásiť sa</a></li>
              <li><a class="dropdown-item langProfile" href="profil.php">Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item langTheme" id="switch1" href="#">Téma Dark</a></li>
              <li><a class="dropdown-item langTheme" id="switch2" href="#">Téma Light</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <aside class="aside-panel" id="aside-panel">
    <h1 class="aside-panel-title" id="aside-panel-title">Informácie</h1>
    <p>
      <?php
        
        $database = new mysqli('localhost', 'root', '', 'freeview');
        $sql = "SELECT user_name FROM user WHERE user_id = " . $_SESSION['login'] . ""; //" . $_SESSION['login'] . "
      
        $userName = mysqli_query($database, $sql);

        while($data = mysqli_fetch_array($userName)){
          $userNameFinal = $data['user_name'];

          echo '<a href="profil.php" class="aside_panel_username">'. $userNameFinal .'</a>';
        }
      ?>
    </p>
    <a href="#" class="langSavedPosts">Uložené</a>
    <br>
    <p id="realDate"></p>
    <p id="realTime"></p>
    <p id="day"></p>
    <br>
    <label for="languages">Vyberte jazyk:</label>
    <select name="languages" id="language">
      <option value="0">Vybrať</option>
      <option value="1">Slovenský</option>
      <option value="2">English</option>
      <option value="3">Русский</option>
    </select>
  </aside>

  <main id="timeline" class="timeline">
    <div id="newPost" class="newPost">
      <h1 class="newPost-title langNewPost">Vytvoriť príspevok</h1>
      <form action="index.php" method="post">
        <textarea name="newPost-data" id="newPost-textarea" class="newPost-textarea" placeholder="Čo je nové?"></textarea>
        <button type="submit" class="btn btn-light newPost-submit langAddPost">Pridať</button>
      </form>
    </div>

    <?php
      $database = new mysqli('localhost', 'root', '', 'freeview');

      if(isset($_POST['newPost-data']))
      {
          $msg = htmlspecialchars($_POST['newPost-data']);
          $sql = "INSERT INTO post (post_creator, post_msg) VALUES ('" . $_SESSION["login"] . "', '" . $msg . "')";
          $database->query($sql);
          header('Refresh: 0');
      }
    ?>

    <?php
      $database = new mysqli('localhost', 'root', '', 'freeview');
      $sql = "SELECT post_creator, post_msg, user_name, post_created, post_likes FROM post INNER JOIN user ON user_id = post_creator ORDER BY post_created DESC LIMIT 50";
      
      $result2 = mysqli_query($database, $sql);

      while($data = mysqli_fetch_array($result2)){
          $subor1 = $data['user_name'];
          $subor2 = $data['post_msg'];
          $subor3 = $data['post_created'];
          $subor4 = $data['post_likes'];

          echo '<div id="post" class="post">';
          echo '<p class="postText">'.$subor2.'</p>';
          echo '<section class="postSection">';
          echo '<p class="postFrom">'.$subor1.'</p>';
          echo '<p class="postDate">'.$subor3.'</p>';
          echo '<p class="postLike">'.$subor4.'</p>';
          echo '<p class="postSave langSavePost">Uložiť</p>';
          echo '</section>';
          echo '</div>';
      }
    ?>

    <!--
    <div id="post" class="post">
      <p class="postText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eligendi dolores illum fugiat neque ducimus, nemo pariatur voluptas, voluptate quibusdam tempore in minus consectetur aliquam expedita nisi iste quasi molestias?</p>
      <section class="postSection">
        <p class="postFrom">From</p>
        <p class="postDate">Date</p>
        <p class="postLike">2</p>
        <p class="postSave langSavePost">Uložiť</p>
      </section>
    </div>
    -->

  </main>
  
  <footer id="conclusion" class="conclusion">
    <h1 class="conclusion-title">FreeView 2022</h1>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
