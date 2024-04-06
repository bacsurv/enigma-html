<?php
session_start();
include ("kozos.php");

$username = "";
$password_old = "";
$password = "";
$password2 = "";
$email = "";
$phone = "";
$first_name = "";
$last_name = "";
$errors = [];



//ADATMODOSITAS
if (isset($_POST["save"])) {
  $username = $_SESSION["username"];
  $email = $_SESSION["email"];
  $last_name = $_POST["last_name"];
  $first_name = $_POST["first_name"];
  $phone = $_POST["phone"];
  $password_old = $_POST["password_old"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  $users = loadUser("users.txt");

  //regi jelszo stimmel-e
  foreach ($users as $user) {
    if ($username === $user["username"] && $password_old !== $user["password"]) {
      alertUserPage("A regi jelszo nem jo!");
      $errors[] = "A regi jelszo nem jo!";
    }
  }

  //jelszo min karakter

  if (strlen($password) < 6) {
    alertUserPage("A jelszo minimum 6 karakter legyen!");
    $errors[] = "A jelszo tul rovid";

  }

  //jelszo betu, szamjegy

  if (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[a-z]/', $password)) {
    alertUserPage("A jelszo tartalmazzon kis es nagybetut es szamot is!");
    $errors[] = "A jelszo nem tartalmaz kis es nagybetut es szamot!";

  }

  //jelszo 1 es 2 egyezen meg

  if ($password !== $password2) {
    alertUserPage("A ket jelszo nem egyezik meg!");
    $errors[] = "A ket jelszo nem egyezik meg!";

  }

  //sikeres mentes
  if (count($errors) === 0) {

    $_SESSION["user"] = $user;
    $_SESSION["first_name"] = $user["first_name"];
    $_SESSION["last_name"] = $user["last_name"];
    $_SESSION["phone"] = $user["phone"];
    //felhasznalo adatai
    $data = [
      "username" => $username,
      "password" => $password,
      "email" => $email,
      "phone" => $phone,
      "first_name" => $first_name,
      "last_name" => $last_name,
    ];
    saveUserData("users.txt", $data, $username);
    alertUserPage("Sikeresen elmentetted az adataidat!");
  }
}


//KIJELENTKEZES
if (isset($_POST["logout"])) {
  $_SESSION = array();
  if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), session_id(), time() - 3600, "/");
  }
  session_destroy();
  header("location:signin_page.php");
}

//FIOK TORLES
if (isset($_POST["delete"])) {
  $username = $_SESSION["username"];
  deleteUser("users.txt", $username);
  header("location:signin_page.php");
}





?>