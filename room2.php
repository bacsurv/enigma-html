<?php
session_start();
include ("kozos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gyémánt Birodalom</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/room.css" />
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
        <li><a href="rooms.php" class="active-menu">Szobáink</a></li>
        <li><a href="about.php">Rólunk</a></li>
        <li><a href="booking_page.php">Foglalás</a></li>
        <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
          <li><a href="signin_page.php">Bejelentkezés/Regisztráció</a></li>
        <?php else: ?>
          <li><a href="user_page.php">Felhasználói adatmódosítás</a></li>
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
      <li class="active-menu"><a href="rooms.php">Szobáink</a></li>
      <li><a href="about.php">Rólunk</a></li>
      <li><a href="booking_page.php">Foglalás</a></li>
      <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
        <li><a href="signin_page.php" class="fa-regular fa-user"></a></li>
      <?php else: ?>
        <li><a href="user_page.php" class="fa-regular fa-user"></a></li>
      <?php endif; ?>
    </ul>
  </header>
  <main>
    <div class="h1">Gyémánt Birodalom</div>
    <div class="large-paragraph">
      Egy fényűző palota, tele drágakövekkel és titokzatos mechanizmusokkal. A
      játékosoknak meg kell találniuk a birodalom legértékesebb kincsét, a
      Gyémánt Koronát, mielőtt az idő lejár.
    </div>
    <div class="paragraph">
      A Gyémánt Birodalom legendás hírnevet szerzett magának a világ minden
      táján, mint a leggazdagabb és legfényűzőbb birodalom, mely tele van
      drágakövekkel és értékes kincsekkel. Azonban a birodalom gazdagsága és
      hatalma rejti a mélyen elrejtett titkokat és veszélyeket is. Egy merész
      kincsvadász csapat úgy dönt, hogy felfedezik a Gyémánt Birodalom
      rejtélyeit, és megszerzik a birodalom legféltettebb kincsét, a Gyémánt
      Koronát. Elindulnak a birodalom szívébe, készülve az izgalmas
      kihívásokra és veszélyekre. Ahogy felfedezik a birodalom fényűző termeit
      és titkos folyosóit, a csapat szembekerül az ősi csapdákkal és
      rejtvényekkel, melyek védelmezik a kincseket. Ám a kincsvadászok nem
      hagyják magukat eltántorítani, és keményen dolgoznak együtt, hogy
      legyőzzék a kihívásokat és elérjék a céljukat. Végül, a csapat eljut a
      Gyémánt Korona szentélyébe, ahol a korona fénye elvakítja őket. Ám az
      ősi birodalom titkai nem mindig olyan egyszerűek, ahogy az első
      pillantásra látszanak. A kincsvadászoknak meg kell találniuk a módját,
      hogy biztonságosan kinyissák a korona vitrinjét, és megszerezzék a
      drágaköveket, mielőtt az idő lejárna.
    </div>
    <div class="img-container">
      <img src="img/palace.jpg" alt="Fényes csillár" />
      <img src="img/palace1.jpg" alt="Kicsek" />
      <img src="img/palace2.jpg" alt="Korona" />
    </div>
    <div class="h2">Szabad időpontok</div>
    <table id="table-desktop">
      <tr class="table-header">
        <th></th>
        <th>Hétfő</th>
        <th>Kedd</th>
        <th>Szerda</th>
        <th>Csütörtök</th>
        <th>Péntek</th>
        <th>Szombat</th>
        <th>Vasárnap</th>
      </tr>
      <tr class="table-row-1">
        <td>13.00 - 14.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-2">
        <td>14.00 - 15.00</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-3">
        <td>15.00 - 16.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-4">
        <td>16.00 - 17.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-5">
        <td>17.00 - 18.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
    </table>
    <table id="table-mobile">
      <tr class="table-header">
        <th></th>
        <th>H</th>
        <th>K</th>
        <th>Sze</th>
        <th>Cs</th>
        <th>P</th>
        <th>Szo</th>
        <th>V</th>
      </tr>
      <tr class="table-row-1">
        <td>13.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-2">
        <td>14.00</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-3">
        <td>15.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-4">
        <td>16.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-5">
        <td>17.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
    </table>
    <a href="rooms.php" class="btn btn-secondary">Megnézem a szobákat</a>
    <a href="booking_page.php" class="btn btn-primary">Lefoglalom</a>
  </main>
  <footer>
    <p class="fa fa-facebook"></p>
    <p class="fa fa-instagram"></p>
    <p class="fa fa-youtube"></p>
    <p class="fa fa-google"></p>
  </footer>
</body>

</html>