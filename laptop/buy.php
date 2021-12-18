<?php
   session_start();
//SELECT `oid`, `email`, `name`, `brand`, `price`, `status` FROM `orders` WHERE 1
include 'config.php';

$name = $_GET['name'];
$brand = $_GET['brand'];
$price = $_GET['price'];
 $email=$_SESSION["email"];
 $a=(rand(100000,999999));
//echo $a;

$cname = $_GET['cname'];
$cno = $_GET['cno'];
$cvv = $_GET['cvv'];
$expmonth = $_GET['expmonth'];
$expyear = $_GET['expyear'];

$sql = "INSERT INTO orders (name, brand, price, email, status, payment_id)
VALUES ('$name', '$brand', '$price', '$email','Order Placed','$a')";

$sql1 = "INSERT INTO card (payment_id, cname, cno, cvv,expmonth,expyear)
VALUES ('$a', '$cname', '$cno', '$cvv', '$expmonth', '$expyear')";

//SELECT `id`, `payment_id`, `cname`, `cno`, `cvv` FROM `card` WHERE 1

if ($conn->query($sql) === TRUE) {
    
    if ($conn->query($sql1) === TRUE) {
    echo '<script> alert("Order Placed Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'home.php';</script>";
    }
} else {
    echo '<script> alert("Something went wrong please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'home.php';</script>";
}

$conn->close();


?>

