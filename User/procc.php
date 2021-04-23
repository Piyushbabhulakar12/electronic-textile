<?php

session_start();

if ($_SESSION['email'] == true) 
{
  echo $_SESSION['email'];
}
else
{
  header("location:Log In/log.php");
}


?>

<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

<?php

$p_id = $_GET['id'];

include '../conn.php';


	
	$p_id = $_GET['id'];
	$user_id = $row['id'];
  $p_price =$_GET['p_price'];

  $sql = " insert into cart (p_id,user_id,qty,p_price) values ('$p_id','$user_id','1','$p_price') ";

  if (mysqli_query($conn,$sql)) 
  {
  	header("location:index.php");
  }
  else
  {
  	echo "Done";
  }



?>