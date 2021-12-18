<?php

include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];



$sql = " UPDATE customer SET pass='$pass' WHERE email='$email' ";

if ($conn->query($sql) === TRUE) {
   echo '<script> alert("Reset Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
} else {
     echo '<script> alert("Invalid Email please try again!!!")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}

$conn->close();