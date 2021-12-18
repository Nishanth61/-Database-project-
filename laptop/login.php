<?php
session_start();

include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];




$sql = "SELECT email,pass FROM customer where email='$email' and pass='$pass' and status='Active'  ";
$result = $conn->query($sql);


$_SESSION["email"] = $email;


if ($result->num_rows > 0) {

    // fetch data
    $id = mysqli_fetch_array($result);

//  echo "Error: " . $sql . "<br>" . $conn->error;

  echo '<script> alert("Login Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'home.php';</script>";
   // header('Location:home.php');
} else {
    echo '<script> alert("Login Unsucessful or Your account Blocked please contact Admin")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}
$conn->close();
?>