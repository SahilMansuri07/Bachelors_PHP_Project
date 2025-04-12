<?php

session_start();

require './atclass/connection.php'; 

if($_POST)
{
  $email = $_POST['lemail'];
  $password = $_POST['lpassword'];
  $q = mysqli_query($connection, "select * from tbl_user where user_email='{$email}' 
  and user_password='{$password}' ");
  $data = mysqli_fetch_array($q);
  $count = mysqli_num_rows($q);

  if($count>0){
    $_SESSION['uid'] = $data['user_id'];
    $_SESSION['uname'] = $data['user_name'];
    header("location:shop.php");
  }else
  {
    echo "<script>alert('login Failed')</script>";
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
  
  <!-- java file loading -->
  <script src="java/jquery-3.7.1.min.js"> </script>
    <script src="java/jquery.validate.js"> </script>

    <script>
        $(document).ready(function () {
            $("#myform").validate();
        });
    </script>

    <style>
        .error {
            color: red;
        }
    </style>
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
                <h2 class="text-uppercase text-center mb-5"> Login </h2>

                <form method="post" id="myform" enctype="multipart/form-data">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    Email address :<input type="email" name="lemail" id="form2Example5" class="form-control"  required>
                      <label class="form-label" for="form2Example1"></label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    Password : <input type="password" name="lpassword" id="form2Example7" class="form-control" required >
                      <label class="form-label" for="form2Example2"></label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>

                      <div class="col">
                        <!-- Simple link -->
                        <a href="forgotpass.php"><u>Forgot password?</u></a>
                      </div>
                    </div>

                    <!-- Submit button -->
        
                    <button type="submit" class="btn btn-primary btn-block mb-4">Login in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="signin.php">Register</a></p> 
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