
<?php

session_start();

?>

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
          <img src="https://mir-cdn.behance.net/v1/rendition/project_modules/fs/625cc379179487.5cbb48a8c0da5.jpg" class="img">
        </div>
        <div class="col-md-5">

          <div class="container">
             <div class="row">
               <div class="col-xl-9 m-auto">
                   
                   <h3 style="text-align: center; margin-top: 65px;">Sign In</h3><br>
                   <br>

                    <input type="text" name="email" placeholder="Enter Email Id" class="form-control rounded-0">

				   <input type="Password" name="pass" placeholder="Enter Password" class="form-control rounded-0 mt-3">

                  <input type="submit" name="submit" value="Log In" class="btn btn-primary w-100 mt-3 rounded-0">

                  <h6 class="text_p">I Don't Have an acoount ? <a href="regi.php">Registration</a><br><br>
                  User Login ? <a href="../../User/Log In/log.php">Log In</a><br>

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

 
    $email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass = md5($pass);
 
        
     $saql = " select * from a_regi where email = '$email' and pass = '$pass' ";

     $row = mysqli_query($conn,$saql);

     if (mysqli_num_rows($row)) 
     {
     	 $_SESSION['email'] = $email;
     	header("location:../index.php");
     }
     else
     {
     	?>
          
          <script>
          	document.getElementById("demo").innerHTML = "Please Enter Valid Email Id and Password";
          </script>

     	<?php
     }



}

?>





</form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
