<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/profil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/languages.js"></script>
    <script src="js/theme.js"></script>
    <title>FreeView Profil</title>
</head>
<body>

  <?php
    session_start();
    if(!isset($_SESSION["login"])) {
      echo "<script>location.href='login.php'</script>";  
      die("Neste prihláseny!");
      die("<script>alert('Nie ste prihláseny!')</script>");
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
            <a class="nav-link langTimeline" aria-current="page" href="index.php">Časová os</a>
          </li>
          <li class="nav-item">
            <a class="nav-link langProject" href="projekt.html">Projekt</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle langAccount" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Účet</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item langLogout" href="logout.php">Odhlásiť sa</a></li>
              <li><a class="dropdown-item langProfile active" href="profil.php">Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item langThemeDark" id="switch1" href="#">Téma Dark</a></li>
              <li><a class="dropdown-item langThemeLight" id="switch2" href="#">Téma Light</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main id="mainProfil">
    <h1 class="title langProfilTitle">Profil</h1>

    <?php
      $database = new mysqli('localhost', 'root', '', 'freeview') or die("Nemozem sa pripojit");
      $sql = "SELECT user_name FROM user WHERE user_id = " . $_SESSION['login'] . "";   
      $userName = mysqli_query($database, $sql);

      while($data = mysqli_fetch_array($userName)){
        $userNameFinal = $data['user_name'];
        echo '<p id="profilUsername" class="profilUsername">Meno: '. $userNameFinal .'</p>';
      }
    ?>
<!--
    <form class="row g-3">
      <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="miso@gmail.com">
      </div>
      <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Heslo">
      </div>
      <div class="col-auto">
        <button type="submit" name="submit" class="btn btn-primary mb-3">Zmeniť heslo</button>
      </div>
  </form>
    -->
  </main>

  <?php
  /*
    if(isset($_POST['password'])) {
      $database = new mysqli('localhost', 'root', '', 'freeview');

      //$email = htmlspecialchars($_POST['email']);
      $password = hash('ripemd160', $_POST['password']);

      $id = $_SESSION['login'];
      $sql3 = "REPLACE INTO user (user_id, user_password) VALUES ($id,$password)";
      $database->query($sql3);
      echo "<script>location.href='logout.php'</script>";
    }
    */
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>