<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$brand = $_POST['brand']; 

 


$sql = " UPDATE product SET name='$name', price='$price', brand='$brand' WHERE id='$id' ";

if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
   // echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:adminhome.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();