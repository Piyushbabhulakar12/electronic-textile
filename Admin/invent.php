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
	<title>Inventory</title>
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




<div class="container mt-3">
  <h4>Inventory</h4>
</div>





<div class="container mt-4">
  <div class="row">
    <div class="col-md-8 m-auto">
      <div style="background: #fff;" class="">
        <div class="row">

<?php
              
              include '../conn.php';

              $sql = " select * from addproduct ";

              $run = mysqli_query($conn,$sql);
               
              while ($row = mysqli_fetch_array($run)) 
              {


          ?>

          <div class="col-md-4 border-end">
            <img src="../Image/<?php echo $row['p_img1']; ?>" style="height: 150px; width: 100%; object-fit: contain;">
          </div>
          <div class="col-md-8">
            <h6><?php echo $row['p_name']; ?></h6>
            <h6 class="text_p">Catagori - <?php echo $row['cat']; ?></h6>
            <h6 style="color: gray; font-size: 12px;">Qty - <?php echo $row['p_qunty']; ?></h6>
            <h6 style="color: gray; font-size: 12px;">Brand - <?php echo $row['p_brand'] ?></h6>
            <h6><s>&#8377;<?php echo $row['p_mrp']; ?></s> &#8377;<?php echo $row['p_price']; ?> </h6>
            <div class="float-end">
              <a href="edit_product.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Edit" class="btn btn-primary" style="width: 100px;"></a>
              <a href="del.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Delete" class="btn btn-danger" style="width: 100px;"></a>
            </div>
          </div>
            
            

        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>





       <br>




</form>
</body>
</html>
