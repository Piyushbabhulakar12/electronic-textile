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


    <title>Done Page</title>
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
	<title>Done</title>

</head>
<body>
<br><br>

<div class="container">
	<img src=https://mir-s3-cdn-cf.behance.net/project_modules/disp/d397ca100064887.5f0094be605e9.jpg 600w, https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d397ca100064887.5f0094be605e9.jpg 750w" style="width: 100%; height: 250px; object-fit: contain;">
</div>

<center><h3 class="mt-3">Your Order Has Been Placed</h3></center>


<center><div class="container">
	<h5 style="background: #f1f1f1; width: 250px; padding:15px;">#<?php echo $at = $_SESSION['o_id']; ?></h5>
</div></center>


<center><a href="index.php"><input type="button" name="" value="Ok" class="btn btn-primary rounded-0 mt-3" style="width: 150px;"></a></center>




<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>