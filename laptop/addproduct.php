<?php
if (!is_dir('images/')) {
    mkdir('images/', 0777, true);
}
include 'config.php';

$name = $_POST['name'];
$price = $_POST['price']; 
$brand = $_POST['brand']; 


$result = array("success" => $_FILES["file"]["name"]);
$file_path = basename( $_FILES['file']['name']);
$picimg_url='images/'.$file_path;
if(move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$file_path)) {
    $result = array("success" => "File successfully uploaded");
} else{
    $result = array("success" => "error uploading file");
}

$sql = " INSERT INTO product (name, brand, price, pic )
VALUES ('$name','$brand' , '$price', '$picimg_url' )";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('Location:adminhome.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();