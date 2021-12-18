<?php
session_start();

include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];




$sql = "SELECT email,pass FROM admin where email='$email' and pass='$pass'  ";
$result = $conn->query($sql);


$_SESSION["email"] = $email;


if ($result->num_rows > 0) {

    // fetch data
    $id = mysqli_fetch_array($result);

//  echo "Error: " . $sql . "<br>" . $conn->error;

  echo '<script> alert("Login Successful")</script>';
      echo "<script type='text/javascript'> document.location = 'adminhome.php';</script>";
   // header('Location:home.php');
} else {
    echo '<script> alert("Login Unsucessful")</script>';
      echo "<script type='text/javascript'> document.location = 'admin.html';</script>";
}
$conn->close();
?>