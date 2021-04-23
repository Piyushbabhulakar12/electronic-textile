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

   
   <?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from a_regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

<center>
	<table border="1">
		<tr>
			<td>First Name</td>
			<td><input type="text" name="f_name" value="<?php echo $row['f_name']; ?>"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="l_name" value="<?php echo $row['l_name']; ?>"></td>
		</tr>
		<tr>
			<td>Email Id</td>
			<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
		</tr>
		<tr>
			<th colspan="2"><input type="submit" name="submit" value="Save"></th>
		</tr>
	</table>
</center>


<?php

include '../conn.php';

if (isset($_POST['submit'])) 
{
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$sql = " update a_regi set f_name = '$f_name' , l_name = '$l_name' , email = '$email' , phone = '$phone' where id = '$id' ";

	if (mysqli_query($conn,$sql)) 
	{
		echo '<meta http-equiv="refresh" content="0">';
	}
	else
	{
		echo "Not Done";
	}
	
}


?>



</form>
</body>
</html>