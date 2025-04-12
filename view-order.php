<?php
 require './atclass/connection.php'; 
session_start();

if(!isset($_SESSION['uid']))
{

    header("location:login.php");
}


if(isset($_GET['did'])){
    $did  = $_GET['did'];
    $did = mysqli_query($connection , "delete from tbl_cart1 where cart_id ='{$did}'");
}
$userid = $_SESSION['uid'];
$q = mysqli_query($connection , "select * from tbl_cart1 where user_id = '{$userid}' " ); 


$i = 0;





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
                        <form method="post">
                        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Order Date</th>
                <th>Order Status</th>
                <th>User ID</th>
                <th>Shipping Name</th>
                <th>Shipping Mobile</th>
                <th>Shipping Address</th>
                <th>Payment Mode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


            <?php
            if (isset($_GET['did'])) {
                $did = $_GET['did'];

                $dq = mysqli_query($connection, "Delete from tbl_ordermaster where order_id = '{$did}'");
                if ($dq) {
                    echo "<script>alert('Record Deleted');</script>";
                }
            }
            $selectq = mysqli_query($connection, "Select * from tbl_ordermaster") or die(mysqli_error($connection));
            $count = mysqli_num_rows($selectq);
            echo $count . "Record Found";
            while ($orderrow = mysqli_fetch_array($selectq)) {
                echo '<tr>';
                echo "<td>{$orderrow['order_id']}</td>";
                echo "<td>{$orderrow['order_date']}</td>";
                echo "<td>{$orderrow['order_status']}</td>";
                echo "<td>{$orderrow['user_id']}</td>";
                echo "<td>{$orderrow['shipping_name']}</td>";
                echo "<td>{$orderrow['shipping_mobile']}</td>";
                echo "<td>{$orderrow['shipping_address']}</td>";
                echo "<td>{$orderrow['payment_mode']}</td>";
                echo "<td><a href='view-order-details.php?oid={$orderrow['order_id']}'> Details</a></td>";
                echo '</tr>';
            }
            ?>


        </tbody>
    </table>
                        </form>
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