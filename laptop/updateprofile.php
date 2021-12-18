<?php

include 'config.php';

$id = $_POST['id'];

$name = $_POST['name'];
$email = $_POST['email']; 

$phone = $_POST['phone'];
$pass = $_POST['pass']; 




$sql = " UPDATE customer SET name='$name', phone='$phone', pass='$pass', email='$email' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
   
  echo '<script> alert("Update Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'myprofile.php';</script>";
} else {
     echo '<script> alert("something went wrong updation failed")</script>';
      echo "<script type='text/javascript'> document.location = 'myprofile.php';</script>";
}

$conn->close();

?>