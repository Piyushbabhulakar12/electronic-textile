
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
	<title>Edit Product</title>
  <style type="text/css">
     .text_p
    {
      color: gray; 
      font-size: 12px;
      padding-top: 15px;
    }
    label {
  display: block;
  width: 80%;
  max-width: 100%;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 2px;
  font-size: 1em;
  line-height: 2.5em;
  text-align: center;
}

label:hover {
  background-color: #fff;
}

label:active {
  background-color: #fff;
}

input[type="file"] {
  border: 0;
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px; 
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}
  </style>
</head>
<body>
<form method="post" enctype="multipart/form-data">

<?php include 'navabar_a.php'; ?>




<?php

        $id = $_GET['id'];
              
              include '../conn.php';

              $sql = " select * from addproduct where id = '$id' ";

              $run = mysqli_query($conn,$sql);
               
             $row = mysqli_fetch_array($run);

          ?>



<div class="container mt-5">
       <div class="row">
         <div class="col-md-12">
           <div style="background: #fff;" class="shadow">
             <div class="container">
               <br>
                
                <h2 style="color: #0005;">Add Product</h2>

                <div class="row">
                  <div class="col-md-12">
                    <h6 class="text_p">Product Name</h6>
                    <input type="text" name="p_name" placeholder="Enter Product Name" value="<?php echo $row['p_name']; ?>" class="form-control">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-5">
                    <h6 class="text_p">Product Image</h6>
                  </div>
                </div>    


                <div class="row">
                  <div class="col-md-3">
                    <img src="../Image/<?php echo $row['p_img1']; ?>" height="100" width="100">
                    <h6 class="text_p">1.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img1" id="apply">Product Image 1</label>
                   <input type="submit" name="img1" value="Upload Image 1" class="btn btn-primary mt-2 w-100">
                  </div>
                  <div class="col-md-3">
                     <img src="../Image/<?php echo $row['p_img2']; ?>" height="100" width="100">
                    <h6 class="text_p">2.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img2" id="apply">Product Image 2</label>
                    <input type="submit" name="img2" value="Upload Image 2" class="btn btn-primary mt-2 w-100">
                  </div>
                  <div class="col-md-3">
                    <img src="../Image/<?php echo $row['p_img3']; ?>" height="100" width="100">
                    <h6 class="text_p">3.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img3" id="apply">Product Image 3</label>
                   <input type="submit" name="img3" value="Upload Image 3" class="btn btn-primary mt-2 w-100">
                  </div>
                  <div class="col-md-3">
                     <img src="../Image/<?php echo $row['p_img4']; ?>" height="100" width="100">
                    <h6 class="text_p">4.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img4" id="apply">Product Image 4</label>
                   <input type="submit" name="img4" value="Upload Image 4" class="btn btn-primary mt-2 w-100">
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                     <h6 class="text_p">Product Catagori</h6>
                     <input type="text" name="cat" value="<?php echo $row['cat']; ?>" class="form-control">
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-3">
                    <h6 class="text_p">Product M.R.P</h6> 
                    <input type="number" name="p_mrp" placeholder="Enter Product M.R.P" value="<?php echo $row['p_mrp']; ?>" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">Product Price</h6>
                    <input type="number" name="p_price" placeholder="Enter Product Price" value="<?php echo $row['p_price']; ?>" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">Dilivery Charges</h6>
                    <input type="number" name="d_charge" placeholder="Enter Dilivery Charges" value="<?php echo $row['d_charge']; ?>" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">Product Quantity</h6>
                    <input type="number" name="p_qunty" placeholder="Enter Product Quantity" value="<?php echo $row['p_qunty']; ?>" class="form-control">
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-3">
                     <h6 class="text_p">Product Height</h6>
                     <input type="text" name="p_height" placeholder="Enter Product Height" value="<?php echo $row['p_height']; ?>" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <h6 class="text_p">Product Width</h6>
                     <input type="text" name="p_width" placeholder="Enter Product Width" value="<?php echo $row['p_width']; ?>" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <h6 class="text_p">Product Weight</h6>
                     <input type="text" name="p_weight" placeholder="Enter Product Weight" value="<?php echo $row['p_weight']; ?>" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <h6 class="text_p">Product Brand</h6>
                     <input type="text" name="p_brand" placeholder="Enter Product Brand" value="<?php echo $row['p_brand']; ?>" class="form-control" >
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                     <h6 class="text_p">Product Description</h6>
                     <textarea cols="29" rows="10" name="p_des" placeholder="Enter Product Description" class="form-control"><?php echo $row['p_des']; ?></textarea>
                  </div>
                </div>
             

               <div class="row mt-3">
                 <div class="col-md-12">
                   <center><input type="submit" name="submit" value="Save" class="btn btn-primary" style="width: 150px;"><a href="invent.php"><input type="button" name="" value="Back" class="btn btn-light" style="width: 150px;"></a></center>
                 </div>
               </div>
 <br>



             </div>
           </div>
         </div>
       </div>
     </div>

<br><br>





   <?php

   $id = $_GET['id'];

  error_reporting(0);

 include '../conn.php';

 if (isset($_POST['submit'])) 
 {


     $p_name = $_POST['p_name'];
    $cat = $_POST['cat'];
    $p_mrp = $_POST['p_mrp'];
    $p_price = $_POST['p_price'];
    $d_charge = $_POST['d_charge'];
    $p_qunty = $_POST['p_qunty'];
    $p_height = $_POST['p_height'];
    $p_width = $_POST['p_width'];
    $p_weight = $_POST['p_weight'];
    $p_brand = $_POST['p_brand'];
    $p_des = $_POST['p_des'];


    $sql = " update addproduct set p_name = '$p_name' , cat = '$cat' , p_mrp = '$p_mrp' , p_price = '$p_price' , d_charge = '$d_charge' , p_qunty = '$p_qunty' , p_height = '$p_height' , p_width = '$p_width' , p_weight = '$p_weight' , p_brand = '$p_brand' , p_des = '$p_des' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo "Done";
    }
    else
    {
    	echo "Not Done";
    }


 }

 ?>


 <?php

  $id = $_GET['id'];

error_reporting(0);

 include '../conn.php';

 if (isset($_POST['img1'])) 
 {

     $p_img1 = $_FILES['p_img1'] ['name'];

    $image_tmp_name = $_FILES['p_img1']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img1");


    $sql = " update addproduct set p_img1 = '$p_img1' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo "Done";
    }
    else
    {
    	echo "Not Done";
    }



 }
  

 ?>

 <?php

  $id = $_GET['id'];

error_reporting(0);

 include '../conn.php';

 if (isset($_POST['img2'])) 
 {

     $p_img2 = $_FILES['p_img2'] ['name'];

    $image_tmp_name = $_FILES['p_img2']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img2");


    $sql = " update addproduct set p_img2 = '$p_img2' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo "Done";
    }
    else
    {
    	echo "Not Done";
    }



 }
  

 ?>


 <?php

  $id = $_GET['id'];

error_reporting(0);

 include '../conn.php';

 if (isset($_POST['img3'])) 
 {

     $p_img2 = $_FILES['p_img3'] ['name'];

    $image_tmp_name = $_FILES['p_img3']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img3");


    $sql = " update addproduct set p_img3 = '$p_img3' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo "Done";
    }
    else
    {
    	echo "Not Done";
    }



 }
  

 ?>

 <?php

  $id = $_GET['id'];

error_reporting(0);

 include '../conn.php';

 if (isset($_POST['img4'])) 
 {

     $p_img2 = $_FILES['p_img4'] ['name'];

    $image_tmp_name = $_FILES['p_img4']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img4");


    $sql = " update addproduct set p_img4 = '$p_img4' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo "Done";
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