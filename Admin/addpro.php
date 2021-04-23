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
                    <input type="text" name="p_name" placeholder="Enter Product Name" class="form-control">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-5">
                    <h6 class="text_p">Product Image</h6>
                  </div>
                </div>    


                <div class="row">
                  <div class="col-md-3">
                    <h6 class="text_p">1.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img1" id="apply">Product Image 1</label>

                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">2.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img2" id="apply">Product Image 2</label>

                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">3.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img3" id="apply">Product Image 3</label>

                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">4.Image</h6>
                    <label for="apply" class="shadow"><input type="file" name="p_img4" id="apply">Product Image 4</label>

                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                     <h6 class="text_p">Product Catagori</h6>
                     <select name="cat" class="form-control">
            <option>Select</option>
            <option value="Electronics ">Electronics</option> 
            <option value="Textile">Textile</option>
            <option value="Other">Other</option>
          </select>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-3">
                    <h6 class="text_p">Product M.R.P</h6>
                    <input type="number" name="p_mrp" placeholder="Enter Product M.R.P" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">Product Price</h6>
                    <input type="number" name="p_price" placeholder="Enter Product Price" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">Dilivery Charges</h6>
                    <input type="number" name="d_charge" placeholder="Enter Dilivery Charges" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <h6 class="text_p">Product Quantity</h6>
                    <input type="number" name="p_qunty" placeholder="Enter Product Quantity" class="form-control">
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-3">
                     <h6 class="text_p">Product Height</h6>
                     <input type="text" name="p_height" placeholder="Enter Product Height" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <h6 class="text_p">Product Width</h6>
                     <input type="text" name="p_width" placeholder="Enter Product Width" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <h6 class="text_p">Product Weight</h6>
                     <input type="text" name="p_weight" placeholder="Enter Product Weight" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <h6 class="text_p">Product Brand</h6>
                     <input type="text" name="p_brand" placeholder="Enter Product Brand" class="form-control">
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                     <h6 class="text_p">Product Description</h6>
                     <textarea cols="29" rows="10" name="p_des" placeholder="Enter Product Description" class="form-control"></textarea>
                  </div>
                </div>
             

               <div class="row mt-3">
                 <div class="col-md-12">
                   <center><input type="submit" name="submit" value="Done" class="btn btn-primary rounded-0" style="width: 150px;"></center>
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


    $p_img1 = $_FILES['p_img1'] ['name'];

    $image_tmp_name = $_FILES['p_img1']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img1");

    $p_img2 = $_FILES['p_img2'] ['name'];

    $image_tmp_name = $_FILES['p_img2']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img2");

    $p_img3 = $_FILES['p_img3'] ['name'];

    $image_tmp_name = $_FILES['p_img3']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img3");

    $p_img4 = $_FILES['p_img4'] ['name'];

    $image_tmp_name = $_FILES['p_img4']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$p_img4");






    $sql = " insert into addproduct (p_name,p_img1,p_img2,p_img3,p_img4,cat,p_mrp,p_price,d_charge,p_qunty,p_height,p_width,p_weight,p_brand,p_des) values ('$p_name','$p_img1','$p_img2','$p_img3','$p_img4','$cat','$p_mrp','$p_price','$d_charge','$p_qunty','$p_height','$p_width','$p_weight','$p_brand','$p_des') ";

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