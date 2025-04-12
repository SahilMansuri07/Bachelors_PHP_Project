<?php

require './atclass/connection.php'; 
session_start();
if($_POST){

	$name= mysqli_real_escape_string($connection , $_POST ['uname']);
	$email= mysqli_real_escape_string($connection , $_POST ['uemail']);
	$password= mysqli_real_escape_string($connection , $_POST ['upassword']);
  $mobile= mysqli_real_escape_string($connection , $_POST ['umobile']);
	$address= mysqli_real_escape_string($connection , $_POST ['uaddress']);

  
  $q = mysqli_query ($connection , "insert into tbl_user(user_name,user_email,user_password,user_mobile,user_address) Values ('{$name}','{$email}','{$password}','{$mobile}','{$address}')") or die (mysqli_error($_connection));
    //fetch old password form db
     
        echo("<script>alert('New and Confirm Password Not Match');</script>");
   
} 
 
?>






<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
        <!-- <div id="preloder">
            <div class="loader"></div>
        </div> -->

    <!-- Offcanvas Menu Begin -->
   
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   <?php
    include "./themepart/header.php";
?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post"id="myform" enctype="multipart/form-data">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg" name="uname" class="form-control form-control-lg" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label> 
                  <input type="email" id="form3Example3cg" name="uemail" class="form-control form-control-lg" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" name="upassword" class="form-control form-control-lg" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Mobile</label>
                  <input type="text" id="form3Example4cdg" name="umobile" class="form-control form-control-lg" required />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Address</label>
                  <input type="text" id="form3Example4cdg" name="uaddress" class="form-control form-control-lg" required />
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>


                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
</div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->

    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
  <?php
include "./themepart/footer.php";

?>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>