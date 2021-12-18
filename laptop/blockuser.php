<?php

include 'config.php';

$id = $_GET['id'];


$sql = " UPDATE customer SET status='Blocked' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
   
  echo '<script> alert("Blocked Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'managecustomers.php';</script>";
} else {
     echo '<script> alert("something went wrong block failed")</script>';
      echo "<script type='text/javascript'> document.location = 'managecustomers.php';</script>";
}

$conn->close();

?>