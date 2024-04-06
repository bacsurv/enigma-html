<?php
session_start();
include ("kozos.php");

$users = loadUser("users.txt");
$username = "";
$password = "";


if (isset($_POST["signin"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $logged_in = false;
  $user_datas = array();


  foreach ($users as $user) {
    if ($username === $user["username"] && $password === $user["password"]) {
      $_SESSION["user"] = $user;
      $_SESSION["username"] = $user["username"];
      $_SESSION["email"] = $user["email"];
      $_SESSION["first_name"] = $user["first_name"];
      $_SESSION["last_name"] = $user["last_name"];
      $_SESSION["phone"] = $user["phone"];
      $logged_in = true;
      break;
    }
  }
  if ($logged_in) {
    header("Location: user_page.php");
  } else {
    alert("Felhasználónév vagy jelszó nem jó!");
  }
}
?>