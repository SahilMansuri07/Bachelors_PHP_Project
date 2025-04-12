<?php
 require './atclass/connection.php'; 
session_start();
$msg = "";
if(!isset($_SESSION['uid']))
{

    header("location:login.php");
}

if ($_POST) {
    $fdetails = mysqli_real_escape_string($connection, $_POST['fdetails']);
    $uid = $_SESSION['uid'];
    $fdate = date('Y-m-d');

    $query = mysqli_query($connection, "insert into tbl_feedback(feedback_details,user_id,feedback_date) values('{$fdetails}','{$uid}','{$fdate}')") or die(mysqli_error($connection));

    if ($query) {
        $msg = '<div class="alert alert-success" role="alert">
             Record Added
            </div>';
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
   
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    
    <?php
include  './themepart/header.php';
?>
    <!-- Header Section End -->
   
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
          
                    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <center>
                    <h2 class="title1">Feedback Form</h2>
                </center>
                <br />
                <?php
                echo $msg;
                ?>
                <div class=" form-grids row form-grids-right">
                    <div class="widget-shadow " data-example-id="basic-forms">

                        <div class="form-body">
                            <form class="form-horizontal" method="post" encrypt="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Feedback Details</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="fdetails" required></textarea>
                                    </div>
                                </div>


                                <div class="col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">Add Feedback</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="button" onclick="window.location='display-feedback.php';" class="btn btn-info">View</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





                    </div>
                   
                </div>
            
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php
include  './themepart/footer.php';

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