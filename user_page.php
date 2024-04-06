<?php
session_start();
include ("kozos.php");

if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
  header("location: signin_page.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Felhasználói adatok</title>
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
        <li class="active-menu"><a href="user_page.php" class="fa-regular fa-user"></a></li>
      <?php endif; ?>
    </ul>
  </header>
  <main>
    <div class="h1">Felhasználói fiók</div>
    <form action="user.php" method="POST">
      <div class="h2">Adatmódosítás</div>
      <div class="form-elements-container">
        <div class="form-element">
          <label for="username_reg" class="paragraph">Felhasználó név:</label>
          <input type="text" name="username" id="username_reg"
            value="<?php if (isset($_SESSION['username']))
              echo $_SESSION['username']; ?>" placeholder="kissbela"
            disabled />
        </div>
        <div class="form-element">
          <label for="password_old" class="paragraph">Régi jelszó:</label>
          <input type="password" name="password_old" id="password_old" placeholder="Jelszó"
            autocomplete="new-password" />
        </div>
        <div class="form-element">
          <label for="password_new" class="paragraph">Új jelszó:</label>
          <input type="password" name="password" id="password_new" placeholder="Jelszó" autocomplete="new-password" />
        </div>
        <div class="form-element">
          <label for="password2_new" class="paragraph">Új jelszó mégegyszer:</label>
          <input type="password" name="password2" id="password2_new" placeholder="Jelszó" autocomplete="new-password" />
        </div>
        <div class="form-element">
          <label for="last-name" class="paragraph">Vezetéknévnév:</label>
          <input type="text" name="last_name" id="last-name"
            value="<?php if (isset($_SESSION['last_name']))
              echo $_SESSION['last_name']; ?>" placeholder="Kiss" />
        </div>
        <div class="form-element">
          <label for="first-name" class="paragraph">Keresztnév:</label>
          <input type="text" name="first_name" id="first-name"
            value="<?php if (isset($_SESSION['first_name']))
              echo $_SESSION['first_name']; ?>" placeholder="Ernő" />
        </div>
        <div class="form-element">
          <label for="phone" class="paragraph">Telefonszám:</label>
          <input type="tel" name="phone" id="phone"
            value="<?php if (isset($_SESSION['phone']))
              echo $_SESSION['phone']; ?>" placeholder="06201234567"
            pattern="[0][6][0-9]{9}" />
        </div>
        <div class="form-element">
          <label for="email" class="paragraph">Email cím:</label>
          <input type="email" name="email" id="email"
            value="<?php if (isset($_SESSION['email']))
              echo $_SESSION['email']; ?>" placeholder="elek@gmail.com"
            disabled />
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="save">Mentés</button>
      <button class="btn btn-secondary" name="logout">Kijelentkezés</button>
      <button class="btn" name="delete">Törlöm a fiókomat!</button>
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