<?php
session_start();
include ("kozos.php");

$username = "";
$password = "";
$password2 = "";
$email = "";
$errors = [];


if (isset($_POST["signup"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  $email = $_POST["email"];

  $users = loadUser("users.txt");

  //felhasznalonev nem foglalt
  foreach ($users as $user) {
    if ($username == $user["username"]) {
      alert("A felhasznalonev mar foglalt!");
      $errors[] = "A felhasznalonev mar foglalt!";
    }
  }
  //email nem foglalt
  foreach ($users as $user) {
    if ($email == $user["email"]) {
      alert("Ezzel az email cimmel mar van felhasznalo!");
      $errors[] = "Ezzel az email cimmel mar van felhasznalo!";
    }
  }

  //jelszo min karakter

  if (strlen($password) < 6) {
    alert("A jelszo minimum 6 karakter legyen!");
    $errors[] = "A jelszo minimum 6 karakter legyen!";
  }

  //jelszo betu, szamjegy

  if (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[a-z]/', $password)) {
    alert("A jelszo tartalmazzon kis es nagybetut es szamot is!");
    $errors[] = "A jelszo tartalmazzon kis es nagybetut es szamot is!";
  }

  //jelszo 1 es 2 egyezen meg

  if ($password !== $password2) {
    alert("A ket jelszo nem egyezik meg!");
    $errors[] = "A ket jelszo nem egyezik meg!";
  }

  //sikeres regisztracio

  if (count($errors) === 0) {
    //felhasznalo adatai
    $data = [
      "username" => $username,
      "password" => $password,
      "email" => $email,
    ];
    //felhasznalo elmentese
    saveUser("users.txt", $data);
    alert("Sikeres regisztracio! Jelentkezz be!");
  }
}

?>