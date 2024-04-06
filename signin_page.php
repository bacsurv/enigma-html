<?php
session_start();
include ("kozos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bejelentkezés/Regisztráció</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/signin.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Atma&family=Merriweather&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/cc61dadd4d.js" crossorigin="anonymous"></script>
</head>

<body>
  <aside id="side-drawer">
    <header>
      <div class="logo">Enigma</div>
      <a href="#" class="side-drawer-btn">
        <span class="lines"></span>
        <span class="lines"></span>
        <span class="lines"></span>
      </a>
    </header>
    <nav>
      <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="rooms.php">Szobáink</a></li>
        <li><a href="about.php">Rólunk</a></li>
        <li><a href="booking_page.php">Foglalás</a></li>
        <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
          <li><a href="signin_page.php" class="active-menu">Bejelentkezés/Regisztráció</a></li>
        <?php else: ?>
          <li><a href="user_page.php" class="active-menu">Felhasználói adatmódosítás</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </aside>
  <header>
    <a href="#side-drawer" class="side-drawer-btn">
      <span class="lines"></span>
      <span class="lines"></span>
      <span class="lines"></span>
    </a>
    <div class="logo">Enigma</div>
    <ul>
      <li><a href="index.php">Főoldal</a></li>
      <li><a href="rooms.php">Szobáink</a></li>
      <li><a href="about.php">Rólunk</a></li>
      <li><a href="booking_page.php">Foglalás</a></li>
      <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
        <li class="active-menu"><a href="signin_page.php" class="fa-regular fa-user"></a></li>
      <?php else: ?>
        <li class="active-menu"><a href="user_page.php" class="fa-regular fa-user active-menu"></a></li>
      <?php endif; ?>
    </ul>
  </header>
  <main>
    <div class="h1">Bejelentkezés/Regisztráció</div>
    <form action="signup.php" method="POST">
      <div class="h2">Regisztráció</div>
      <div class="form-elements-container">
        <div class="form-element">
          <label for="username_reg" class="paragraph">Felhasználó név:</label>
          <input type="text" name="username" id="username_reg" placeholder="kissbela" required />
        </div>
        <div class="form-element">
          <label for="email" class="paragraph">Email cím:</label>
          <input type="email" name="email" id="email" placeholder="elek@gmail.com" required />
        </div>
        <div class="form-element">
          <label for="password_reg" class="paragraph">Jelszó:</label>
          <input type="password" name="password" id="password_reg" placeholder="Jelszó" required />
        </div>
        <div class="form-element">
          <label for="password2_reg" class="paragraph">Jelszó mégegyszer:</label>
          <input type="password" name="password2" id="password2_reg" placeholder="Jelszó" required />
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="signup">Regisztráció</button>
      <button type="reset">Törlöm az adataimat!</button>
    </form>
    <form action="signin.php" method="POST">
      <div class="h2">Bejelentkezés</div>
      <div class="form-elements-container">
        <div class="form-element">
          <label for="username_be" class="paragraph">Felhasználó név:</label>
          <input type="text" name="username" id="username_be" placeholder="kissbela" required />
        </div>
        <div class="form-element">
          <label for="password_be" class="paragraph">Jelszó:</label>
          <input type="password" name="password" id="password_be" placeholder="Jelszó" required />
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="signin">Bejelentkezés</button>
    </form>
  </main>
  <footer>
    <p class="fa fa-facebook"></p>
    <p class="fa fa-instagram"></p>
    <p class="fa fa-youtube"></p>
    <p class="fa fa-google"></p>
  </footer>
</body>

</html>