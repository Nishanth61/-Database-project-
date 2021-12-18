<?php

include 'config.php';

$query ="SELECT * from orders" ;
$r = mysqli_query($conn,$query);
$rows = array();
while($row = mysqli_fetch_assoc($r)) {
$rows[] = array('oid' => $row['oid'],'name' => $row['name'],'email' => $row['email'],'brand' => $row['brand'],'price' => $row['price'],'paymeny_id' => $row['paymeny_id']);
}

echo json_encode($rows);
mysqli_close($conn);
?>