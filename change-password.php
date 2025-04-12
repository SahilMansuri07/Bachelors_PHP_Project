<?php

require './atclass/connection.php'; 
session_start();
 if (!isset($_SESSION['uid'])) {
    echo "<script>alert('Login Required');window.location='login1.php';</script>";
}
if ($_POST) {
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $uid = $_SESSION['uid'];
    //Fetch Password
    $oq = mysqli_query($connection, "Select * from tbl_user where user_id = '{$uid}'");
    $odata = mysqli_fetch_array($oq);
    if ($odata['user_password'] == $opass) {
        if ($npass == $cpass) {
            if ($opass == $npass) {
                echo "<script>alert('New Password Can not be same as Old password');</script>";
            } else {
                $uq = mysqli_query($connection, "Update tbl_user set user_password = '{$npass}' where user_id = '{$uid}'");
                echo "<script>alert('Password Updated');</script>";
            }
        } else {
            echo "<script>alert('New Password and Confirmed Password Need to be Same');</script>";
        }
    } else {
        echo "<script>alert('Old Password Not Match');</script>";
    }
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
              <h2 class="text-uppercase text-center mb-5">Change Password</h2>

              <form method="post"id="myform" enctype="multipart/form-data">

                
             

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Old Password</label>
                  <input type="password" id="form3Example4cg" name="opass" class="form-control form-control-lg" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">New password</label>
                  <input type="password" id="form3Example4cdg" name="npass"  class="form-control form-control-lg" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Confirm Password</label>
                  <input type="password" id="form3Example3cg" name="cpass" class="form-control form-control-lg" required/>
                </div>
 


                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
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