<?php

include 'config.php';

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];
;

$sql = "INSERT INTO customer (name, email, phone, pass, status)
VALUES ('$name', '$email', '$phone', '$pass','Active')";

if ($conn->query($sql) === TRUE) {
    echo '<script> alert("Registerd Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
} else {
    echo '<script> alert("Something went wrong please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'registration.html';</script>";
}

$conn->close();


?>

