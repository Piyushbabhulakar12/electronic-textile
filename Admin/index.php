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
	<title>Index Page</title>
</head>
<body>


<?php include 'navabar_a.php'; ?>


<br>

<?php

include '../conn.php';

$sql = " select * from a_hit ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
@$tot += $row['p_price'];	
}

?>



<div class="container mt-3">
	<div class="row">
		<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
			<div style="background: #fff; padding: 8px;" class="shadow border-start border-5 border-primary">
				<div class="container-fluid">
					<h5>Total Price</h5>
                   <h4 class="mt-3"> &#8377;<?php echo $tot; ?></h4>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
			<div style="background: #fff; padding: 8px;" class="shadow border-start border-5 border-danger">
				<div class="container-fluid">
					<h5>Pending Order</h5>

<?php

include '../conn.php'; 

$sql = " select * from u_order where action = 'Pending' ";

$run = mysqli_query($conn,$sql);

$toaat = mysqli_num_rows($run);

?>


                   <h4 class="mt-3"><?php echo $toaat; ?></h4>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 col-sm-6 mt-3">

			<div style="background: #fff; padding: 8px;" class="shadow border-start border-5 border-warning">
				<div class="container-fluid">

<?php

include '../conn.php'; 

$sql = " select * from addproduct";

$run = mysqli_query($conn,$sql);

$tot_pro = mysqli_num_rows($run);

?>

					<h5>Product</h5>
                   <h4 class="mt-3"><?php  echo $tot_pro;?></h4>
				</div>
			</div>
			
		</div>
		<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
			<div style="background: #fff; padding: 8px;" class="shadow border-start border-5 border-success">
				<div class="container-fluid">
<?php

include '../conn.php'; 

$sql = " select * from a_hit";

$run = mysqli_query($conn,$sql);

$tota_pro = mysqli_num_rows($run);

?>



					<h5>Order Confiremd</h5>
                   <h4 class="mt-3"><?php echo $tota_pro; ?></h4>
				</div>
			</div>
		</div>
	</div>
</div>









</body>
</html>