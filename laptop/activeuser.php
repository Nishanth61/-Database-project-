<?php

include 'config.php';

$id = $_GET['id'];


$sql = " UPDATE customer SET status='Active' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
   
  echo '<script> alert("Activate Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'managecustomers.php';</script>";
} else {
     echo '<script> alert("something went wrong Activate failed")</script>';
      echo "<script type='text/javascript'> document.location = 'managecustomers.php';</script>";
}

$conn->close();

?>