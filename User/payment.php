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

 $_SESSION['o_id'];

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


    <title>Payment</title>
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
	<title>Payment Page</title>
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




<div class="container mt-5">
	<div class="row">
		<div class="col-md-8">
			<div style="background: #fff;">
				<div class="container">

					<h4>Payment</h4><br>
					

					<div class="row">
						<div class="col-md-6">
							<h6 class="text_p">Cardholder Name</h6>
							<input type="text" name="" placeholder="Enter Cardholder Name" class="form-control rounded-0">
						</div>
						<div class="col-md-6">
							<h6 class="text_p">Card Number</h6>
							<input type="text" name="" placeholder="Enter Card Number" class="form-control rounded-0">
						</div>
					</div>


					<div class="row mt-2">
						<div class="col-md-6">
							<h6 class="text_p">Name Of Card</h6>
							<input type="text" name="" placeholder="Name Of Card" class="form-control rounded-0">
						</div>
						<div class="col-md-6">
							<h6 class="text_p">Card Type</h6>
							<select class="form-control rounded-0">
				<option>Debit Card</option>
				<option>Credit Card</option>
			   </select>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-md-6">
							<h6 class="text_p">Card Expirey</h6>
							<input type="month" name="" class="form-control rounded-0">
						</div>
						<div class="col-md-6">
							<h6 class="text_p">CVV</h6>
							<input type="password" name="" placeholder="Enter CVV" class="form-control rounded-0">
						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div style="background: #fff;">
				<div class="container">
					
					<h4>Order Summary</h4>

					<div class="row mt-4">
						<div class="col-6">
							<h5>Total</h5>
						</div>
						<div class="col-6" style="text-align: right;">
							<?php

			$usu = $_SESSION['o_id'];

			include '../conn.php';

			$sql = " select * from u_order where order_id = '$usu' ";

			$run = mysqli_query($conn,$sql);
           
            $row = mysqli_fetch_array($run);

			?>

          <h5>&#8377;<?php echo $row['total']; ?></h5>
						</div>
					</div>
					<hr>


<input type="submit" name="submit" value="Confirm Order" class="btn btn-primary rounded-0 w-100">

				</div>
			</div>
		</div>
	</div>
</div>




<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row1 = mysqli_fetch_array($run);

$id = $row1['id'];

?>

<?php

$usu = $_SESSION['o_id'];

include '../conn.php';

if (isset($_POST['submit'])) 
{
	

	$sql = " update u_order set payment = 'Done' where order_id = '$usu' ";

	if (mysqli_query($conn,$sql)) 
	{
		$id = $row1['id'];

		$saa = " delete from cart where user_id = '$id' ";

		if (mysqli_query($conn,$saa)) 
		{
			?>
                <script type="text/javascript">
                 	location.href = "done.php";
                 </script>
			<?php
		}
		else
		{
			echo "Not Done";
		}

	}
	else
	{
		echo "Not Done";
	}


}

?>

















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