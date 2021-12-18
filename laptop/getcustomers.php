<?php

include 'config.php';

$query ="SELECT * from customer" ;
$r = mysqli_query($conn,$query);
$rows = array();
while($row = mysqli_fetch_assoc($r)) {
$rows[] = array('id' => $row['id'],'name' => $row['name'],'email' => $row['email'],'phone' => $row['phone'],'pass' => $row['pass'],'status' => $row['status']);
}

echo json_encode($rows);
mysqli_close($conn);
?>