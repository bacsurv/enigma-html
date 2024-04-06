<?php
session_start();
include ("kozos.php");

if (isset($_POST["booking"])) {
  $room = $_POST["room"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $group_name = $_POST["group_name"];
  $quantity = $_POST["quantity"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  $errors = [];

  $bookings = loadBooking("booking.txt");

  foreach ($bookings as $booking) {
    if (($booking["date"] === $date && $booking["time"] === $time) && $booking["room"] === $room) {
      notFreeAlert("Ebben a szobában, ebben az időpontban mások küzdenek az életükért! Válassz egy másik időpontot, vagy egy másik kalandot! Ne felejtsd el megnézni a szoba honlapján a szabad időpontjainkat!");
      $errors[] = "Az idopont mar foglalt!";
    }
  }


  //sikeres foglalas
  if (count($errors) === 0) {
    //felhasznalo adatai
    $data = [
      "room" => $room,
      "date" => $date,
      "time" => $time,
      "group_name" => $group_name,
      "quantity" => $quantity,
      "email" => $email,
      "phone" => $phone,
      "message" => $message,
    ];
    //felhasznalo elmentese
    saveBooking("booking.txt", $data);
    alertBookingPage('A végzeted időpontját és helysznét sikeresen lefoglaltad!');
  }
}
?>