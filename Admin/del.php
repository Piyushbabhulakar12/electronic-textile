<?php
  
  $id = $_GET['id'];

 include '../conn.php';

 $sql = " delete from addproduct where id = '$id' ";

 if (mysqli_query($conn,$sql)) 
 {
 	header("location:invent.php");
 }
 else
 {
 	echo "Not Done";
 }

?>