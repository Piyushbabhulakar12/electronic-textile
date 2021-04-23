<?php

session_start();

if ($_SESSION['email'] == true) 
{
   $_SESSION['email'];
}
else
{
	header("location:Log_a/log.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
 <form method="post" enctype="multipart/form-data">
 	
   <?php include 'navabar_a.php'; ?>

  <br>

  <center>
  	<table border="1">

   <?php
    
    include '../conn.php';
     
     $sql = " select * from contact ";

     $run = mysqli_query($conn,$sql);

     while ($row = mysqli_fetch_array($run)) 
     {
     ?>

  		<tr>
  			<td><?php echo $row['u_name']; ?><br>
  				<b><?php echo $row['des']; ?></b>
  			</td>
  		</tr>
  		<?php 
     }

   ?>
  	</table>
  </center>






</form>
</body>
</html>