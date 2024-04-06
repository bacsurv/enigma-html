<?php
session_start();

function loadUser($filename)
{
  $users = [];

  //falj megnyitasa
  $file = fopen($filename, "r");
  if ($file === false) {
    die("A users.txt fajl olvasasra megnyitasa nem sikerult!");
  }

  while (($line = fgets($file)) !== false) {
    $users[] = unserialize($line);
  }


  //fajl bezarasa
  fclose($file);
  return $users;
}


function saveUser($filename, $user)
{
  //fajl megnyitasa
  $file = fopen($filename, "a");
  if ($file === false) {
    die("A users.txt fajl irasra megnyitasa nem sikerult!");
  }
  //beleiras
  fwrite($file, serialize($user) . "\n");

  //fajl bezarasa
  fclose($file);

  //serialize($tomb) -- tombot stringge alakitja
  //unserialize($sor) -- stringet tombbe alakitja
}

function saveUserData($filename, $user_data, $username)
{
  $users = loadUser($filename);

  foreach ($users as &$user) {
    if ($username === $user["username"]) {
      $user = $user_data;
      break;
    }
  }

  //fajl megnyitasa
  $file = fopen($filename, "w");
  if ($file === false) {
    die("A users.txt fajl irasra megnyitasa nem sikerult!");
  }
  //beleiras
  foreach ($users as $user) {
    fwrite($file, serialize($user) . "\n");
  }

  //fajl bezarasa
  fclose($file);

}
function deleteUser($filename, $username)
{
  $users = loadUser($filename);
  //felhasznalo indexenek megkeresese
  foreach ($users as $index => $user) {
    if ($username === $user["username"]) {
      array_splice($users, $index, 1);
      break;
    }
  }

  //fajl megnyitasa
  $file = fopen($filename, "w");
  if ($file === false) {
    die("A users.txt fajl irasra megnyitasa nem sikerult!");
  }
  //beleiras
  foreach ($users as $user) {
    fwrite($file, serialize($user) . "\n");
  }

  //fajl bezarasa
  fclose($file);
  $_SESSION["user"] = [];

}

function alert($msg)
{
  echo "<script type='text/javascript'>alert('$msg');
  window.location.href='signin_page.php';
  </script>";
}
function alertUserPage($msg)
{
  echo "<script type='text/javascript'>alert('$msg');
  window.location.href='user_page.php';
  </script>";
}

function loadBooking($filename)
{
  $bookings = [];

  //falj megnyitasa
  $file = fopen($filename, "r");
  if ($file === false) {
    die("A booking.txt fajl olvasasra megnyitasa nem sikerult!");
  }

  while (($line = fgets($file)) !== false) {
    $bookings[] = unserialize($line);
  }


  //fajl bezarasa
  fclose($file);
  return $bookings;
}

function saveBooking($filename, $booking_data)
{
  //fajl megnyitasa
  $file = fopen($filename, "a");
  if ($file === false) {
    die("A booking.txt fajl irasra megnyitasa nem sikerult!");
  }
  //beleiras
  fwrite($file, serialize($booking_data) . "\n");

  //fajl bezarasa
  fclose($file);

}
function notFreeAlert($msg)
{
  echo "<script type='text/javascript'>alert('$msg');
  window.location.href='booking_page.php';
  </script>";
}
function alertBookingPage($msg)
{
  echo "<script type='text/javascript'>alert('$msg');
  window.location.href='index.php';
  </script>";
}
?>