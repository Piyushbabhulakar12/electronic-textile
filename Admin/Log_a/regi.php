<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Font CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <title>Registration</title>
    <style type="text/css">
      body
      {
        font-family: 'Poppins', sans-serif;
        background: #f9f6fd;
      }
      .text_p
      {
        font-size: 12px;
        color: gray;
        padding-top: 15px;
      }
      a
      {
        text-decoration: none;
      }
      .img
      {
        width: 100%; height: 500px; object-fit: cover;
      }
      @media only screen and (max-width: 600px) {
   .img
      {
        display: none;
      }
}
    </style>
  </head>
  <body>
  <form method="post">


    
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <div style="background: #fff;">
              <div class="row">
                <div class="col-xl-7">
          <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/3333b779179487.5cbb48a8bffae.jpg" class="img">
        </div>
        <div class="col-md-5">

          <div class="container">
             <div class="row">
               <div class="col-xl-9 m-auto">
           
           <h3 style="text-align: center; margin-top: 19px;">Registration</h3>

           <br>
                 
                 <input type="text" name="f_name" placeholder="Enter First Name" class="form-control rounded-0">

                 <input type="text" name="l_name" placeholder="Enter Last Name" class="form-control mt-3 rounded-0">

                 <input type="text" name="email" placeholder="Enter Email Id" class="form-control mt-3 rounded-0">

                 <input type="text" name="phone" placeholder="Enter Phone Number" class="form-control mt-3 rounded-0">

                 <input type="Password" name="pass" placeholder="Enter Password" class="form-control mt-3 rounded-0">

                 <input type="Password" name="cpass" placeholder="Enter Confirm Password" class="form-control mt-3 rounded-0">

                 <input type="submit" name="submit" value="Registration" class="btn btn-primary w-100 mt-3 rounded-0">

                 <h6 class="text_p">I Have Account ? <a href="log.php">Log In</a></h6><br>

               </div>
             </div>
           </div>


        </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
   

<?php

 include '../../conn.php';

if (isset($_POST['submit'])) 
{
  
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  $pass = md5($pass);
  $cpass = md5($pass);

 
  $sql = " insert into a_regi (f_name,l_name,email,phone,pass,cpass) value ('$f_name','$l_name','$email','$phone','$pass','$cpass') ";

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>