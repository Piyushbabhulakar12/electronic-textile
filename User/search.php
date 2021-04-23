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
	<title>Search Page</title>
</head>
<body>



<div class="container-fluid  bg-light " style="background: #fff;">
  <div class="row">
    <div class="col-md-4">
    
      <h4 class="mt-4" class="log">SRK</h4>
   
    </div>
    <div class="col-md-4 p-1">

    	<form action="search.php" method="post" class="d-flex mt-3">
	<input list="browsers" id="browser" name="searchterm" placeholder="Enter Search Here ..."  class="form-control rounded-0 ">
	<datalist id="browsers">
<?php

include '../conn.php';

$sql = " select * from addproduct ";

$run = mysqli_query($conn,$sql);

while ($aaa = mysqli_fetch_array($run)) 
{
	
?>

  <option value="<?php echo $aaa['p_name']; ?>">
  <option value="<?php echo $aaa['p_brand']; ?>"></option>
  <option value="<?php echo $aaa['cat']; ?>"></option>
<?php } ?>


  </datalist>
	<input type="submit" value="Search" class="btn btn-primary rounded-0">
 </form>


<form>
     

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













<br>





<form method="post">



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="background: #fff;">
				<div class="container">
					
						<?php

error_reporting(0);

include '../conn.php';

$search = $_POST['searchterm'];

$saql = $_POST['searchterm'];

$sql = " select * from addproduct where p_name Like '%$search%' OR cat Like '%$search%' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
<div class="row mt-3 border-bottom">
						<div class="col-4">
							<img src="../Image/<?php echo $row['p_img1']; ?>" style="height: 150px; width: 100%; object-fit: contain;">
						</div>
						<div class="col-8">
							<?php echo $row['p_name']; ?><br>

							 
				<h4>&#8377;<?php  $number = $row['p_price']; echo $rar = number_format($number, 2, '.', ','); ?></h4>
				<s>&#8377;<?php $naumber = $row['p_mrp']; echo $rar = number_format($naumber, 2, '.', ','); ?></s> 
<br>
				<a href="procc.php?id=<?php echo $row['id']; ?>&p_price=<?php echo $row['p_price']; ?>"><input type="button" name="" value="Add To Cart" class="btn btn-primary" style="font-size: 12px; float: right;"></a>
</div>
						</div>
					<?php } ?>
					</div>
				
			</div>
		</div>
	</div>
</div>














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


</form>
</body>
</html>