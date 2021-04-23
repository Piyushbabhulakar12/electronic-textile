<?php

include '../conn.php';

$id = $_GET['id'];

$p_qty = $_GET['qty'] - 1;

$sql = " update cart set qty = '$p_qty' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:cart.php");
}
else
{
	echo "Not DOne";
}



?>