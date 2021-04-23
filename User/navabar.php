<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


         


<center>
	<table border="1">
		<tr>
			<td><a href="index.php">Home</a></td>
			<td><a href="order.php">Order</a></td>
			<td><a href="profile.php">Profile</a></td>
			<td><a href="contact.php">Contact</a></td>

			<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

			<?php
               
               include '../conn.php';

               $sql = " select * from cart where user_id = '$id' ";

               $run = mysqli_query($conn,$sql);
                
               $tot = mysqli_num_rows($run);

			?>


			<td><a href="cart.php">Cart <?php echo $tot; ?></a></td>
		</tr>
	</table>
</center>


</body>
</html>