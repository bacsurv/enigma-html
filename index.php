<?php
session_start();
include ("kozos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enigma Szabadulószoba</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/index.css" />
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
        <li><a href="" class="active-menu">Főoldal</a></li>
        <li><a href="rooms.php">Szobáink</a></li>
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
      <li class="active-menu"><a href="">Főoldal</a></li>
      <li><a href="rooms.php">Szobáink</a></li>
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
    <section id="hero-section">
      <div id="layer">
        <div class="h1">Fedezd fel az Enigma titkait!</div>
        <div class="large-paragraph">
          Merülj el a misztikus történetekben és találd meg az utat a
          szabadulás felé. Válaszd a kalandot és légy részese egy
          felejthetetlen élménynek!
        </div>
        <a href="booking_page.php" class="btn btn-primary">Időpontot foglalok</a>
      </div>
    </section>
    <section id="rooms-section">
      <div class="h1">Tekintsd meg szobáinkat</div>
      <div class="cards-container">
        <div class="card">
          <a href="room1.php">
            <div class="card-img">
              <img src="img/church.jpg" alt="piros templom ajtó" />
            </div>
            <div class="card-body">
              <div class="h2">Elveszett Templom</div>
              <div class="paragraph">
                A rejtvényekkel teli, őszi hangulatú szoba, melyben a
                résztvevőknek egy elveszett templom titkait kell felfedezniük.
                Az eldugott freskók, rejtett kapcsolók és titkos folyosók
                segítenek az útvesztőben.
              </div>
            </div>
          </a>
        </div>
        <div class="card">
          <a href="room2.php">
            <div class="card-img">
              <img src="img/palace.jpg" alt="kristály csillár" />
            </div>
            <div class="card-body">
              <div class="h2">Gyémánt Birodalom</div>
              <div class="paragraph">
                Egy fényűző palota, tele drágakövekkel és titokzatos
                mechanizmusokkal. A játékosoknak meg kell találniuk a
                birodalom legértékesebb kincsét, a Gyémánt Koronát, mielőtt az
                idő lejár.
              </div>
            </div>
          </a>
        </div>
        <div class="card">
          <a href="room3.php">
            <div class="card-img">
              <img src="img/forest.jpg" alt="sejtelmes erdő" />
            </div>
            <div class="card-body">
              <div class="h2">Mágikus Erdő</div>
              <div class="paragraph">
                Egy varázslatos erdő mélyén rejtőzik ez a szoba, ahol a
                természet varázslatos erejét kell kihasználniuk a
                játékosoknak, hogy megtalálják az elrejtett varázslatos
                könyvet, mielőtt az idő lejárna. Ám vigyázat, az erdő tele van
                rejtélyekkel és varázslatos csapdákkal!
              </div>
            </div>
          </a>
        </div>
      </div>
      <a href="rooms.php" class="btn btn-secondary">Megnézem a szobákat</a>
      <a href="booking_page.php" class="btn btn-primary">Időpontot foglalok</a>
    </section>
    <section id="game-section">
      <div class="h1">Hogyan működik a szabadulószoba?</div>
      <div class="cards-container">
        <div class="card">
          <div class="h2">Alakíts csapatot</div>
          <div class="paragraph">
            Szobáink 2-8 fős csapatok számára ideálisak. A szobák leírásánál tájékozódhatsz a részletekről.
          </div>
        </div>
        <div class="card">
          <div class="h2">Válassz szobát</div>
          <div class="paragraph">
            A szobáink különböző témákkal rendelkeznek, mint például krimi,
            horror, fantasy vagy sci-fi.
          </div>
        </div>
        <div class="card">
          <div class="h2">Kutass</div>
          <div class="paragraph">
            A résztvevőknek különböző rejtvényeket, nyomokat és kulcsokat kell
            keresniük a szoba körül, és ezeket logikusan kell összekapcsolniuk
            a kijutáshoz.
          </div>
        </div>
        <div class="card">
          <div class="h2">Kommunikálj</div>
          <div class="paragraph">
            A játékosoknak szükségük van egymás segítségére, koordinációra és
            hatékony kommunikációra azért, hogy megoldják az összetett
            feladatokat.
          </div>
        </div>
        <div class="card">
          <div class="h2">Figyeld az időt</div>
          <div class="paragraph">
            Általában 60 perc áll a játékosok rendelkezésére a
            kiszabaduláshoz. Fontos az időt hatékonyan kihasználni és nem
            elveszni a feladatok között.
          </div>
        </div>
        <div class="card">
          <div class="h2">Kérj segítséget</div>
          <div class="paragraph">
            Ha elakadtál, nyugodtan kérheted animátorunk segítségét, nem hagyunk egyedül!
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p class="fa fa-facebook"></p>
    <p class="fa fa-instagram"></p>
    <p class="fa fa-youtube"></p>
    <p class="fa fa-google"></p>
  </footer>
</body>

</html>