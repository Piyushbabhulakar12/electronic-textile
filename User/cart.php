<?php

session_start();

if ($_SESSION['email'] == true) 
{
   $_SESSION['email'];
}
else
{
  header("location:Log In/log.php");
}

?>



<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Font CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <title>Cart</title>
    <style type="text/css">
      body
      {
        font-family: 'Poppins', sans-serif;
        background: #fff;
      }
      .cart_ico
      {
        font-size: 25px;
        text-align: right;
        float: right;
        margin-top: 25px;
      }
      .nva_te
      {
        color: black;
      }
     .na_bt
     {
      border: none;
     }
     .navbar-toggler
     {
font-size: 15px;
     }
    .navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none;
    box-shadow: none;
    
}
.log
{
  padding-left: 35px; 

}
.carousel-caption {
    
    text-align: left;
    top: 50%;
    transform: translateY(-50%);
}
.div_tcxt
{
  margin-top: -150px;
  margin-left: 15px;
}

.swiper-container {
  width: 600px;
  height: 300px;
}


.swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
 .text_p
    {
      font-size: 13px;
      color: gray;
    }
    .erro
    {

    }

@media only screen and (max-width: 600px) {
 .log
{
  padding-left: 15px; 
  text-align: center;
}
}

    </style>
	<title>Cart Page</title>
</head>
<body>



<div class="container-fluid  bg-light " style="background: #fff;">
  <div class="row">
    <div class="col-md-4">
    
      <h4 class="mt-4" class="log">SRK</h4>
   
    </div>
    <div class="col-md-4 p-1">
      
      <form action="search.php" method="post" class="d-flex mt-3">
        <input type="text" name="searchterm" placeholder="Enter Search Here ..." class="form-control rounded-0 ">
        <input type="submit" value="Search" class="btn btn-primary rounded-0">
        </form>

    </div>
    
  </div>

</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" style="background: #fff; border-bottom: 1px solid #D9D9D9;">
  <div class="container-fluid">
    <button class="navbar-toggler na_bt" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nva_te" href="index.php" style="color: black;">Home</a>
           </li>
           <li class="nav-item">
          <a class="nav-link nva_te" href="order.php" style="color: black;">Order</a>
           </li>
           <li class="nav-item">
          <a class="nav-link nva_te" href="profile.php" style="color: black;">Profile</a>
           </li>
           <li class="nav-item">
          <a class="nav-link nva_te" href="contact.php" style="color: black;">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nva_te" href="logout.php" style="color: black;">Logout</a>
        </li>
       
      </ul>

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
    
          
      

          
        
    </div>
   <a href="cart.php"><h6 style="font-size: 23px; margin-top: 8px; float:right; color: black; text-align: right;"><ion-icon name="cart-outline"></ion-icon></h6><span class="badge rounded-pill badge-notification bg-primary" style="margin-top: -15px; font-size: 10px; text-align: right;"><?php echo $tot; ?></span></a>

  

  

  </div>
  
</nav>

























<form method="post">








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



<div class="container mt-3">
  <h3>My Cart <?php echo $tot; ?> </h3>
</div>



<?php

if ($tot == 0) 
{
  ?>
 
 <center><h1 class="erro">Opps ! Sorry No Card Added </h1></center>

  <?php
}
else
{
?>




<div class="container mt-3">
  <div class="row">
    <div class="col-md-8">
      <div style="background: #fff;" class="shadow">
        <div class="container">
          
          <div class="row">
 <?php

         include '../conn.php';

         $sql =" select * from cart where user_id = '$id' ";

         $run = mysqli_query($conn,$sql);

         while ($row = mysqli_fetch_array($run)) 
         {
          
      ?>

      <?php

         include '../conn.php';
        
          $p_id = $row['p_id'];

          $sqaaal = " select * from addproduct where id = '$p_id' ";

          $aua = mysqli_query($conn,$sqaaal);

          while ($pro = mysqli_fetch_array($aua)) 
          {


      ?>



            <div class="col-4 mt-3">
              <img src="../Image/<?php echo $pro['p_img1'] ?>" style="height: 200px; width: 100%; object-fit: contain;">
            </div>

            <div class="col-8 mt-3">
             <h6 style=" white-space: nowrap;  width: 100%;  overflow: hidden; text-overflow: ellipsis; margin-top: 20px; "><?php echo $pro['p_name']; ?></h6>

              <h6 class="text_p">Brand - <?php echo $pro['p_brand']; ?></h6>
             <h6 class="text_p">Catagori - <?php echo $pro['cat']; ?></h6>

             <div class="row mt-3">
               <div class="col-4">


           <h6 style="font-size: 21px; ">&#8377;
        <?php  $number = $pro['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; ">&#8377;<?php $naumber = $pro['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
                 
               </div>
               <div class="col-md-8">
                  <span style="color: #1ED069;">You Save &#8377;<?php echo $res = $number - $naumber; ?></span>
                  <h6 style="font-size: 13px; margin-top: 5px;">Dilivery Charge -&#8377; <?php echo $pro['d_charge']; ?></h6>
               </div>
             </div>
            </div>


  <div class="col-5 d-flex mt-3">



              <?php

                if ($row['qty'] == 1) 
                {
                  ?>
                  <a href="dec_qty.php?id=<?php echo $row['id']; ?>&qty=<?php echo $row['qty']; ?>"><input type="button" name="" value="-" class="btn" disabled></a>
                  <?php
                }
                else
                {
                  ?>
<a href="dec_qty.php?id=<?php echo $row['id']; ?>&qty=<?php echo $row['qty']; ?>"><input type="button" class="btn" name="" value="-"></a>
                  <?php
                }

              ?>
              <input type="text" name="" value="<?php echo $row['qty']; ?>" class="form-control rounded-0">
                <a href="inc_qty.php?id=<?php echo $row['id']; ?>&qty=<?php echo $row['qty']; ?>"><input type="button" class="btn" name="" value="+"></a>


</div>
<div class="col-7 mt-3">
  <a href="r_cart.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Remove" class="btn"></a>
</div>




        <?php } } ?>

          </div>
          <br>
          </div>
        </div>
      </div>
    
    <div class="col-md-4">
      <div style="background: #fff;" >
        <div class="container">
          
          <h4>Price Detail</h4>
        
        <div class="row mt-3">
          <div class="col-6">
            Price (<?php echo $tot; ?> Item)
          </div>
          <div class="col-6">

             <?php

         include '../conn.php';

         $sql =" select SUM(p_price*qty) as total from cart where user_id = '$id' ";

         $run = mysqli_query($conn,$sql);

         $aow = mysqli_fetch_array($run);
        
      ?>

 

       <h6 style="text-align: right;">&#8377;<?php echo $toatl_p = $aow['total']; ?></h5>
         
            
          </div>
        </div>



        <div class="row mt-3">
          <div class="col-6">
            Delivery Charges
          </div>
          <div class="col-6" style="text-align: right;">

              <?php
             
             if ($aow['total'] >= '600') 
             {
               echo "Free Delivery";
             }
             else
             {
              echo $di = $di_c;
             }

         ?>
         
            
          </div>
        </div>

<hr>
<div class="row">

<div class="col-6">
  Total Price
</div>
<div class="col-6" style="text-align: right;">
   &#8377;<?php error_reporting(0); echo $toatl_p+$di; ?>
</div>


</div>

<div class="row mt-3">
  <div class="col-12">
    <center><a href="address.php"><input type="button" name="" name="" value="Place Order" class="btn btn-primary rounded-0 w-100"></a></center>
  </div>
</div>


        </div>
      </div>
    </div>
  </div>



<?php } ?>


<br>
<hr>


<div class="container mt-5">
  <h4>Fetured Product</h4>
</div>


<div class="container mt-5">
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php

include '../conn.php';

$sql = " select * from addproduct where cat = 'Electronics' ORDER BY id DESC ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
      <div class="swiper-slide border-end">
        

 


        <div class="card" style="background: #fff; border:none;">
  <img src="../Image/<?php echo $row['p_img1'] ?>" class="card-img-top" alt="..." style="height: 220px; width: 100%; object-fit: contain;">
  <div class="card-body">
    <h5 style="font-size: 17px; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: clip; "><a href="p_detail.php?id=<?php echo $row['id']; ?>" style="color: black; text-decoration: none;"><?php echo $row['p_name']; ?></a></h5>
    <br>
    <div class="float-start">
      <h6 style="font-size: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; margin-left: 15px;">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
    </div>
    <div class="float-end">
     
    </div>
   
  </div>
</div>




      </div>
      <?php } ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

</div>




<div class="container mt-5">
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php

include '../conn.php';

$sql = " select * from addproduct where cat = 'Textile' ORDER BY id DESC ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
      <div class="swiper-slide border-end">
        

 


        <div class="card" style="background: #fff; border:none;">
  <img src="../Image/<?php echo $row['p_img1'] ?>" class="card-img-top" alt="..." style="height: 220px; width: 100%; object-fit: contain;">
  <div class="card-body">
    <h5 style="font-size: 17px; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: clip; "><a href="p_detail.php?id=<?php echo $row['id']; ?>" style="color: black; text-decoration: none;"><?php echo $row['p_name']; ?></a></h5>
    <br>
    <div class="float-start">
      <h6 style="font-size: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; margin-left: 15px;">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
    </div>
    <div class="float-end">
     
    </div>
   
  </div>
</div>




      </div>
      <?php } ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

</div>











<br><br>


<footer class="border-top" style="border-top: 1px solid gray;">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-4">
        
        <h6>Quick Information</h6>

       <h6 style="font-size: 13px;" class="mt-3">My Company, 42 Puffin street Puffinville France</h6>
       <h6 style="font-size: 13px;" class="mt-3">Phone : +01 2222 115 /(+91) 01 1111 1221</h6>
       <h6 style="font-size: 13px;" class="mt-3">Email : logo@gmail.com</h6>

       <h6 class="mt-4">Follow On Social</h6>

       <div class="row mt-4">
         <div class="col-2">
           <ion-icon name="logo-facebook"></ion-icon>
         </div>
         <div class="col-2">
           <ion-icon name="logo-instagram"></ion-icon>
         </div>
         <div class="col-2">
           <ion-icon name="logo-twitter"></ion-icon>
         </div>
         <div class="col-2">
           <ion-icon name="logo-pinterest"></ion-icon>
         </div>
         <div class="col-2">
           <ion-icon name="logo-rss"></ion-icon>
         </div>
       </div>




      </div>
      <div class="col-md-4 col-6 mt-4">
        
        <h6>About Us</h6>
        <h6 style="font-size: 13px;" class="mt-3">About us</h6>
        <h6 style="font-size: 13px;" class="mt-3">Privacy & Policy</h6>
        <h6 style="font-size: 13px;" class="mt-3">Term & Condition</h6>
        <h6 style="font-size: 13px;" class="mt-3">Contact Us</h6>


      </div>
      <div class="col-md-4 col-6 mt-4">
        
        <h6>Navbar</h6>
        <h6 style="font-size: 13px;" class="mt-3">Home</h6>
        <h6 style="font-size: 13px;" class="mt-3">Order Detail</h6>
        <h6 style="font-size: 13px;" class="mt-3">Profile Detail</h6>
        <h6 style="font-size: 13px;" class="mt-3">Cart Detail</h6>
        <h6 style="font-size: 13px;" class="mt-3">Search</h6>
        <h6 style="font-size: 13px;" class="mt-3">Logout</h6>


      </div>
     
    </div>
  </div>


<hr>






<div class="container">
  <div class="row">
    <div class="col-md-4">
      <center><h6 class="mt-3" style="font-size: 12px;">Copyright © 2021</h6></center>
    </div>
    <div class="col-md-4">
      <center><h2>SRK</h2></center>
    </div>
    <div class="col-md-4">
      <center>
      <div class="mt-2">
        <img src="http://opencart.templatemela.com/OPCADD3/OPC071/image/catalog/visa.png">
      <img src="http://opencart.templatemela.com/OPCADD3/OPC071/image/catalog/discover.png">
      <img src="http://opencart.templatemela.com/OPCADD3/OPC071/image/catalog/maestro.png">
      <img src="http://opencart.templatemela.com/OPCADD3/OPC071/image/catalog/paypal.png">
      <img src="http://opencart.templatemela.com/OPCADD3/OPC071/image/catalog/american-express.png">
      </div>
      </center>
    </div>
  </div>
</div>



</footer>










<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 1,
      freeMode: true,
      breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    970: {
      slidesPerView: 2,
      spaceBetween: 40
    },
    1200: {
      slidesPerView: 4,
      spaceBetween: 1
    }

  }
     
    });

   
  </script>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</form>
</body>
</html>