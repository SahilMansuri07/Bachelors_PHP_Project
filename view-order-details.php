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
                <th>OrderID</th>
                <th>ProductName</th>
                <th>Image</th>
                <th>Qty</th>
                <th>Price</th>
                
            </tr>
        </thead>
        <tbody>


            <?php
           
           $oid = $_GET['oid'];
            $selectq = mysqli_query($connection, "Select * from tbl_orderdetails where order_id ='{$oid}'") or die(mysqli_error($connection));
            $count = mysqli_num_rows($selectq);
            echo $count . "Record Found";
            while ($orderrow = mysqli_fetch_array($selectq)) {
                $pq = mysqli_query($connection,"select * from tbl_product where prod_id ='{$orderrow['prod_id']}'");
                $pdata = mysqli_fetch_array($pq);
                echo '<tr>';
                echo "<td>{$orderrow['order_id']}</td>";
                echo "<td>{$pdata['prod_name']}</td>";
                echo "<td><img src='./upload/{$pdata['prod_photo']}' width='100'/></td>";
                echo "<td>{$orderrow['prod_qty']}</td>";
                echo "<td>{$orderrow['prod_price']}</td>";
                
              
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