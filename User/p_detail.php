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


    <title>Product Detail</title>
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


@media only screen and (max-width: 600px) {
 .log
{
  padding-left: 15px; 
  text-align: center;
}
}

    </style>
	<title>Index Page</title>
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






<div class="container mt-3">
  <div class="row">
     <?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from addproduct where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>
    <div class="col-md-6">
       



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php
       
       if ($row['p_img1'] == '') 
       {
         ?>

  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/a5986e82467297.5d1e19c09cd9b.jpg" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">

         <?php
       }
       else
       {
        ?>
 <img src="../Image/<?php echo $row['p_img1'] ?>" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">
        <?php
       }

      ?>
   
    </div>
    <div class="carousel-item">
      <?php
       
       if ($row['p_img2'] == '') 
       {
         ?>

  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/a5986e82467297.5d1e19c09cd9b.jpg" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">

         <?php
       }
       else
       {
        ?>
 <img src="../Image/<?php echo $row['p_img2'] ?>" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">
        <?php
       }

      ?>
    
    </div>
    <div class="carousel-item">
      <?php
       
       if ($row['p_img3'] == '') 
       {
         ?>

  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/a5986e82467297.5d1e19c09cd9b.jpg" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">

         <?php
       }
       else
       {
        ?>
 <img src="../Image/<?php echo $row['p_img3'] ?>" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">
        <?php
       }

      ?>
      
    </div>
    <div class="carousel-item">

      <?php
       
       if ($row['p_img4'] == '') 
       {
         ?>

  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/a5986e82467297.5d1e19c09cd9b.jpg" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">

         <?php
       }
       else
       {
        ?>
 <img src="../Image/<?php echo $row['p_img4'] ?>" class="card-img-top" style="height: 450px; width: 100%; object-fit: contain;">
        <?php
       }

      ?>

     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>







    </div>
    <div class="col-md-6">
       
           <h5 style="font-size: 18px;" class="mt-3"><?php echo $row['p_name']; ?></h5><br>
           <h6 class="text_p">Brand - <?php echo $row['p_brand']; ?></h6>
           <h6 class="text_p">Catagori - <?php echo $row['cat']; ?></h6>

            <h6 style="font-size: 21px; margin-top: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; ">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>

        <h6 style="font-size: 13px;">Dilivery Charge -&#8377; <?php echo $row['d_charge']; ?></h6>


             <?php

             error_reporting(0);

             $id = $_GET['id'];

             include '../conn.php';

             $sal = " select * from cart where p_id = '$id' ";

             $rar = mysqli_query($conn,$sal);

             $roao = mysqli_fetch_array($rar);

             ?>

           
           <?php

              $id = $_GET['id'];

             if ($roao['p_id'] == $id) 
             {
               ?>
 <a href="procprp.php?id=<?php echo $row['id']; ?>&p_price=<?php echo $row['p_price']; ?>"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 13px; margin-top: 15px;" disabled></a>
               <?php
             }
             else
             {
?>
 <a href="procprp.php?id=<?php echo $row['id']; ?>&p_price=<?php echo $row['p_price']; ?>"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 13px; margin-top: 15px;"></a>
<?php
             }

           ?>

     

        


         <h6 style="font-size: 14px; margin-top: 17px; color: #999999;"><?php echo $row['p_des']; ?></h6>

 

    </div>



  </div>
</div>





<br>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">

      <h3>Product Detail</h3>
      <h6 class="text_p mt-2">Name - <?php echo $row['p_name']; ?></h6>
      <h6 class="text_p">Brand - <?php echo $row['p_brand']; ?></h6>
      <h6 class="text_p">Catagori - <?php echo $row['cat']; ?></h6>
      <h6 class="text_p">Product Height & Width - <?php echo $row['p_height']; ?></h6>
      <h6 class="text_p">Product Weight - <?php echo $row['p_weight']; ?></h6>

      <h3>Description</h3>

      <h6 style="font-size: 14px; margin-top: 15px; color: #999999;"><?php echo $row['p_des']; ?></h6>

    </div>
  </div>
</div>



<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
      <?php
       
       if ($row['p_img1'] == '') 
       {
         
       }
       else
       {
        ?>
<img src="../Image/<?php echo $row['p_img1'] ?>" style="width: 100%; height: 250px; object-fit: contain;">
        <?php
       }

      ?>
    </div>
    <div class="col-md-3">
      <?php
       
       if ($row['p_img2'] == '') 
       {
         
       }
       else
       {
        ?>
<img src="../Image/<?php echo $row['p_img2'] ?>" style="width: 100%; height: 250px; object-fit: contain;">
        <?php
       }

      ?>
    </div>
    <div class="col-md-3">
      <?php
       
       if ($row['p_img3'] == '') 
       {
         
       }
       else
       {
        ?>
<img src="../Image/<?php echo $row['p_img3'] ?>" style="width: 100%; height: 250px; object-fit: contain;">
        <?php
       }

      ?>
    </div>
    <div class="col-md-3">
      <?php
       
       if ($row['p_img4'] == '') 
       {
         
       }
       else
       {
        ?>
<img src="../Image/<?php echo $row['p_img4'] ?>" style="width: 100%; height: 250px; object-fit: contain;">
        <?php
       }

      ?>
    </div>
  </div>
</div>



<div class="container mt-4">
  <h3>Releted Products</h3>
</div>




<div class="container">
  <div class="row">
    <?php

    $ar = $_GET['id'];

    $led = $row['cat'];

include '../conn.php';

$sql = " select * from addproduct where cat = '$led' and id != '$ar' ORDER BY id DESC ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
    <div class="col-md-3 mt-3 border-end border-start">
       <img src="../Image/<?php echo $row['p_img1'] ?>" class="card-img-top" alt="..." style="height: 220px; width: 100%; object-fit: contain;">
       <h5 style="font-size: 17px; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: clip; "><a href="p_detail.php?id=<?php echo $row['id']; ?>" style="color: black; text-decoration: none;"><?php echo $row['p_name']; ?></a></h5>

<br>
    <div class="float-start">
      <h6 style="font-size: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; margin-left: 15px;">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
    </div>
    <div class="float-end">


     <?php

              $id = $row['id'];

             if ($roao['p_id'] == $id) 
             {
               ?>
 <a href="procprp.php?id=<?php echo $row['id']; ?>&p_price=<?php echo $row['p_price']; ?>"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 12px; margin-top: 15px;" disabled></a>
               <?php
             }
             else
             {
?>
 <a href="procprp.php?id=<?php echo $row['id']; ?>&p_price=<?php echo $row['p_price']; ?>"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 12px; margin-top: 15px;"></a>
<?php
             }

           ?>
    </div>

    </div>
  <?php } ?>
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