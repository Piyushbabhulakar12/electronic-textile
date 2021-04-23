



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


    <title>Home Page</title>
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
    .img_s
    {
      height: 600px;
     object-fit: cover;
    }


@media only screen and (max-width: 600px) {
 .log
{
  padding-left: 15px; 
  text-align: center;
}
.img_s
    {
      height: 250px;
     object-fit: cover;
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
          <a class="nav-link nva_te" href="User/Log In/regi.php" style="color: black;">Register</a>
           </li>
           <li class="nav-item">
          <a class="nav-link nva_te" href="User/Log In/log.php" style="color: black;">Sign In</a>
           </li>
      </ul>

     

		
    
        	
			

        	
        
    </div>
  

  

  </div>
  
</nav>



<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/6ced52115421951.604e6bba09fbf.png" class="d-block w-100 img_s" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size: 40px;">New</h5>
        <h5 style="font-size: 40px;">Smart Android TV</h5>
        <h5 style="font-size: 25px;">From <span style="color: #fff;">&#8377;15,000</span></h5>
       <a href="User/Log In/log.php"><button class="btn btn-primary mt-1">Shop Now</button></a> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/456c1379475697.5cc40f055d41c.jpg" class="d-block w-100 img_s" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size: 40px;">New</h5>
        <h5 style="font-size: 40px;">Air Conditioner</h5>
        <h5 style="font-size: 25px; ">From <span style="color: black;">&#8377;15,000</span></h5>
        <a href="User/Log In/log.php"><button class="btn btn-primary mt-1">Shop Now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/12302c50408429.58d78c83b651b.jpg" class="d-block w-100 img_s" alt="..." >
        <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size: 40px;">New</h5>
        <h5 style="font-size: 40px;">Coffee Maker</h5>
        <h5 style="font-size: 25px; ">From <span style="color: #fff;">&#8377;15,000</span></h5>
        <button class="btn btn-primary mt-1">Shop Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/c3628c80339397.5ce2a67d15f55.png" class="d-block w-100 img_s" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size: 40px;">New</h5>
        <h5 style="font-size: 40px;">Desk Heater</h5>
        <h5 style="font-size: 25px;">From <span style="color: #fff;">&#8377;15,000</span></h5>
        <button class="btn btn-primary mt-1">Shop Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/d2e72d43298539.57ea6c9728ddf.jpg" class="d-block w-100 img_s" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size: 40px; color: black;">New</h5>
        <h5 style="font-size: 40px; color: black;"> Microwave</h5>
        <h5 style="font-size: 25px; color: black;">From <span style="color: black;">&#8377;15,000</span></h5>
        <button class="btn btn-primary mt-1">Shop Now</button>
      </div>
    </div>
     <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1533561679034-ad5a6d4d65f7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img_s" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size: 40px; color: #fff;">New</h5>
        <h5 style="font-size: 40px; color: #fff;">Cotton Fabric</h5>
        <h5 style="font-size: 25px; color: #fff;">From <span style="color: #fff;">&#8377;999</span></h5>
        <a href="User/Log In/log.php"><button class="btn btn-primary mt-1">Shop Now</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden" >Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





<div class="container mt-5">
  <div class="row">
    <div class="col-md-3 border-end">
      <div class="row">
        <div class="col-2">
          <center><ion-icon name="happy-outline" style="font-size: 25px; color: #2D84FB;" class="mt-2"></ion-icon></center>
        </div>
        <div class="col-10"> 
      100% SATISFACTION
      If you are unable
        </div>
      </div>
   
    </div>
    <div class="col-md-3 border-end">
      <div class="row">
        <div class="col-2">
          <center><ion-icon name="thumbs-up-outline" style="font-size: 25px; color: #2D84FB;" class="mt-2"></ion-icon></center>
        </div>
        <div class="col-10">
           SAVE 20% WHEN YOU
           Use credit card
        </div>
      </div>
    </div>
    <div class="col-md-3 border-end">
      <div class="row">
        <div class="col-2">
          <center><ion-icon name="airplane-outline" style="font-size: 25px; color: #2D84FB;" class="mt-2"></ion-icon></center>
        </div>
        <div class="col-10">
          FAST SHIPMENT
          Load any computer's
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row">
        <div class="col-2">
          <center><ion-icon name="alert-circle-outline" style="font-size: 25px; color: #2D84FB;" class="mt-2"></ion-icon></center>
        </div>
        <div class="col-10">
            Secure <br>
      100% Safes
        </div>
      </div>
    
    </div>
  </div>
</div>



<div class="container mt-3">
  <div class="row">
  <div class="col-md-6 mt-5">
    
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/2de71581566731.5d03276246fec.jpg" style="height: 220px; width: 100%; object-fit: cover; ">

    <div class="div_tcxt">
      <h2 style="color: ;">Hair Dryer</h2>
      <h3 style="color: ;">35% Off</h3>
    </div>

  </div>
  <div class="col-md-6 mt-5">
    
     <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/58111157667225.59de9aa18ed29.jpg" style="height: 220px; width: 100%; object-fit: cover;">

      <div class="div_tcxt">
      <h2 style="color: #fff;">Coffe Maker</h2>
      <h3 style="color: #fff;">25% Off</h3>
    </div>

  </div>
</div>
</div>



<br><br>



<form method="post">

<br>

<div class="container mt-3">
  <h4>FEATURED PRODUCT</h4>
</div>



<div class="container mt-3">
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php

include 'conn.php';

$sql = " select * from addproduct ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
      <div class="swiper-slide border-end">
        

 


        <div class="card" style="background: #fff; border:none;">
  <img src="Image/<?php echo $row['p_img1'] ?>" class="card-img-top" alt="..." style="height: 220px; width: 100%; object-fit: contain;">
  <div class="card-body">
    <h5 style="font-size: 17px; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: clip; "><a href="User/Log In/log.php" style="color: black; text-decoration: none;"><?php echo $row['p_name']; ?></a></h5>
    <br>
    <div class="float-start">
      <h6 style="font-size: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; margin-left: 15px;">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
    </div>
    <div class="float-end">
      <a href="User/Log In/log.php"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 12px;"></a>
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







<div class="container mt-3">
  <div class="row">
  <div class="col-md-6 mt-5">
    
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/dcb74369150161.5b7649bcb9044.jpg" style="height: 220px; width: 100%; object-fit: cover; ">

    <div class="div_tcxt">
      <h2 style="color: #fff;">New Android Tv</h2>
      <h3 style="color: #fff;">35% Off</h3>
    </div>

  </div>
  <div class="col-md-6 mt-5">
    
     <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/6412c6109222533.5fcf3759901fb.jpg" style="height: 220px; width: 100%; object-fit: cover;">

      <div class="div_tcxt">
      <h2 style="color: #fff;">Washing Machine</h2>
      <h3 style="color: #fff;">25% Off</h3>
    </div>

  </div>
</div>
</div>

<br><br>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/55960d65148869.5aea37c46b722.jpg" style="height: 220px; width: 100%; object-fit: cover;">
       
    </div>
    <div class="col-md-4">
       <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/5ee47236243579.571524a4dc5b9.jpg" style="height: 220px; width: 100%; object-fit: cover;">
         
    </div>
    <div class="col-md-4">
       <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/7e4a9f109956323.600d5cb852fed.jpg" style="height: 220px; width: 100%; object-fit: cover;">
          
    </div>
  </div>
</div>




<div class="container mt-4">
  <h4>Electronic Product</h4>
</div>


<div class="container mt-4">
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php

include 'conn.php';

$sql = " select * from addproduct where cat = 'Electronics' ORDER BY id DESC ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
      <div class="swiper-slide border-end">
        

        <div class="card" style="background: #fff; border:none;">
  <img src="Image/<?php echo $row['p_img1'] ?>" class="card-img-top" alt="..." style="height: 220px; width: 100%; object-fit: contain;">
  <div class="card-body">
    <h5 style="font-size: 17px; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: clip; "><a href="User/Log In/log.php" style="color: black; text-decoration: none;"><?php echo $row['p_name']; ?></a></h5>
    <br>
    <div class="float-start">
      <h6 style="font-size: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; margin-left: 15px;">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
    </div>
    <div class="float-end">
      <a href="User/Log In/log.php"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 12px;"></a>
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








<div class="container mt-3">
  <div class="row">
  <div class="col-md-6 mt-5">
    
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/d5c429113248709.6024c86590fc3.jpg" style="height: 220px; width: 100%; object-fit: cover; ">

    <div class="div_tcxt">
      <h2 style="color: #fff;">New Fabric</h2>
      <h3 style="color: #fff;">35% Off</h3>
    </div>

  </div>
  <div class="col-md-6 mt-5">
    
     <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/04ac68113103247.6021660615905.jpg" style="height: 220px; width: 100%; object-fit: cover;">

      <div class="div_tcxt">
      <h2 style="color: #fff;">New Textile</h2>
      <h3 style="color: #fff;">10% Off</h3>
    </div>

  </div>
</div>
</div>



<br><br>






<div class="container mt-5">
  <h4>Textile & Fabric Product</h4>
</div>


<div class="container mt-4">
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php

include 'conn.php';

$sql = " select * from addproduct where cat = 'Textile' ORDER BY id DESC ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
      <div class="swiper-slide border-end">
        

        <div class="card" style="background: #fff; border:none;">
  <img src="Image/<?php echo $row['p_img1'] ?>" class="card-img-top" alt="..." style="height: 220px; width: 100%; object-fit: contain;">
  <div class="card-body">
    <h5 style="font-size: 17px; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: clip; "><a href="User/Log In/log.php" style="color: black; text-decoration: none;"><?php echo $row['p_name']; ?></a></h5>
    <br>
    <div class="float-start">
      <h6 style="font-size: 18px;">&#8377;
        <?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?><br>
        <s style="font-size: 13px; margin-top: -16px; margin-left: 15px;">&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s>  </h6>
    </div>
    <div class="float-end">
      <a href="User/Log In/log.php"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 12px;"></a>
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
  <div class="row">
  <div class="col-md-12">
    
    <img src="https://m.media-amazon.com/images/S/aplus-media/sc/e74d1ff2-808b-43df-ba8c-5d9801a0f513.__CR726,826,2222,687_PT0_SX970_V1___.jpg" style="height: 220px; width: 100%; object-fit: cover; ">


  </div>
</div>
</div>





<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mt-4">

    <img src="https://images.unsplash.com/photo-1606885118474-c8baf907e998?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" style="height: 490px; width: 100%; object-fit: cover; ">

         
    </div>
    <div class="col-md-4 mt-4">

       <img src="https://images.unsplash.com/photo-1588533018474-72fa6e331a90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" style="height: 230px; width: 100%; object-fit: cover; ">

      
       <img src="https://images.unsplash.com/photo-1444362408440-274ecb6fc730?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=753&q=80" style="height: 230px; width: 100%; object-fit: cover; " class="mt-4">


      
    </div>
    <div class="col-md-4 mt-4">

        <img src="https://images.unsplash.com/photo-1542905333-96e12e5c2cfd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=370&q=80" style="height: 490px; width: 100%; object-fit: cover; ">


      
    </div>
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