<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM product WHERE id='$id';";
	 

if($conn->query($sql)===TRUE){
echo "Deleted Successfully";

echo "Error:" .$sql."<br>".$conn->error;
header('location:adminhome.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}