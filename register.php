<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/languages.js"></script>
    <script src="js/theme.js"></script>
    <title>FreeView Registrácia</title>
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
            <a class="nav-link langTimeline" aria-current="page" href="index.php">Časová os</a>
          </li>
          <li class="nav-item">
            <a class="nav-link langProject" href="projekt.html">Projekt</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle langAccount" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Účet</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item langLogin" href="login.php">Prihlásenie</a></li>
              <li><a class="dropdown-item langRegister active" href="register.php">Registrácia</a></li>
              <li><a class="dropdown-item langLogout" href="logout.php">Odhlásiť sa</a></li>
              <li><a class="dropdown-item langProfile" href="profil.php">Profil</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item langThemeLight" id="switch2" href="#">Téma Light</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main id="main">
    <h1 class="title langRegisterTitle">Registrácia</h1>

    <form action="register.php" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Prezývka</label>
        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        <div id="emailHelp" class="form-text">Prezývka, ktorá sa bude zobrazovať na sociálnej sieti.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">Email bude skrytý pre ostatných ľudí. Slúži na overenie účtu.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Heslo</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
        <button type="submit" class="btn btn-primary" name="submit">Registrovať sa</button>
    </form>
  </main>

  <script>
    localStorage.setItem("storageTheme", "light");
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
  if(isset($_POST['username'])) {
    $database = new mysqli('localhost', 'root', '', 'freeview') or die("Nemozem sa pripojit");
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = hash('ripemd160', $_POST['password']);
    $posts = 0;
    $likes = 0;
    $saved = 0; //Pridat do databazy pocet ulozenych postov
    $sql = "INSERT INTO user (user_name, user_email, user_password, user_posts, user_likes) VALUES ('" . $name . "','" . $email . "','" . $password . "','" . $posts . "','" . $likes ."')";
    $database->query($sql);
    echo "<script>location.href='login.php'</script>";
  }
?>
