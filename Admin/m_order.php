<?php

session_start();

if ($_SESSION['email'] == true) 
{
  echo $_SESSION['email'];
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
  <style type="text/css">
      .text_p
    {
      color: gray; 
      font-size: 12px;
      padding-top: 15px;
    }
  </style>
</head>
<body>
 <form method="post" enctype="multipart/form-data">
 	
   <?php include 'navabar_a.php'; ?>










<div class="container mt-4">
  <div class="row">
    <div class="col-md-8 m-auto">
      <div style="background: #fff;" class="">
        <div class="row">

 <?php
            
            include '../conn.php';

            $sql = " select * from u_order where action = 'Pending' ";

            $run = mysqli_query($conn,$sql);

           while ($row = mysqli_fetch_array($run)) 
           {

             $p_id = $row['p_id'];

             $sa = " select * from addproduct where id = '$p_id' ";

             $arar = mysqli_query($conn,$sa);

             while ($rar = mysqli_fetch_array($arar)) 
             {
             
           ?>

          <div class="col-md-4 mt-4 border-end">
            <img src="../Image/<?php echo $rar['p_img1']; ?>" style="height: 150px; width: 100%; object-fit: contain;">
          </div> 
          <div class="col-md-8 mt-4">
            <b style="color: blue;">#<?php echo $row['order_id']; ?></b>
            <h6><?php echo $rar['p_name']; ?></h6>
           <div class="row">
             <div class="col-md-6 ">
               
           <h6 class="text_p"><?php echo $rar['p_brand']; ?></h6>
           <h6 style="color: gray; font-size: 12px;">Product Qty - <?php echo $row['p_qty']; ?></h6>
           <h6 style="color: gray; font-size: 12px;">Price Paid - <?php echo $row['p_price']; ?></h6>
           <h6 style="color: gray; font-size: 12px;">Order Date - <?php echo $row['date']; ?></h6>
           <h6 style="color: gray; font-size: 12px;">Payment - <b style="color: green;"><?php echo $row['payment']; ?></b></h6>
             </div>
             <div class="col-md-6 ">
               Name - <?php echo $row['u_name']; ?>,<br>
          Phone - <?php echo $row['u_phone']; ?>,<br>
          Address - <?php echo $row['u_add']; ?>,<?php echo $row['u_city']; ?> ,<br>
          <?php echo $row['u_state']; ?> - <?php echo $row['u_pin']; ?>
             </div>
           </div>

            <div class="row mt-3">
             <div class="col-md-12">
             <center> <a href="c_order.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Confirm Order" class="btn btn-primary"></a> </center>
             </div>
              
              </a>
            </div>
          </div>
            
           

        <?php } } ?>
        </div>
      </div>
    </div>
  </div>
</div>
















  <br>




</form>
</body>
</html>