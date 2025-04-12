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
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <form method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name </th>
                                    <th>Images </th>
                                    <th>qty</th>
                                    <th>Total</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                           
                            $finaltotal = 0;
                            while ($data = mysqli_fetch_array($q))
                                {
                                    $i++;
                                    $pq = mysqli_query($connection , "select * from tbl_product where prod_id = {$data['prod_id']}");
                                    $pdata = mysqli_fetch_array($pq);
?>
                                
                                <tr>
                                    <td class="product__cart__item" >
                                        <?php
                                        echo "$i";
                                        ?>
                                      
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text">
                                           
                                            <h6><?php echo $pdata['prod_name'];?></h6>
                                            
                                        </div>
                                    </td>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                         <img src="upload/<?php echo $pdata['prod_photo']?>" width="100" alt="">
                                        </div>
                                    </td>
                                   
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <?php echo $data['prod_qty'];  ?>                                     
                                        </div>
                                    </td>
                                    <?php $subtotal = $pdata['prod_price'] * $data['prod_qty']; 
                                    $finaltotal += $subtotal;
                                    ?>
                                    <td class="cart__price">₹<?php echo $subtotal   ; ?></td>
                                    <td class="cart__close"><a href ='cart.php?did=<?php echo $data['cart_id']?>'> <i class="fa fa-close"></i></a>
                                   </td>
                                </tr>  
        
                                <?php
                                
                                }
                                ?>
                            </tbody>
                        </table>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                                <a href="shop.php"><i class="fa fa-spinner"></i> Continue Shopping</a>
                            </div>
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                       
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6> Billing Amount</h6>
                        
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        
                        
                        <ul>
                           
                                 <?php

                                 if($finaltotal>500){
                                     
                        
                                    echo "<li>Total <span>₹ $finaltotal  </span></li>";
                                    echo "<li>Delivary Charges <span>  <strike> ₹ 50</strike> </span></li>";      
                                 }
                                else
                                {

                                    echo "<li>Total <span>₹ $finaltotal  </span></li>";
                                    echo "<li>Delivary Charges <span>₹ 50</span></li>";   
                                }

                             
                             ?>

                         
                         
                        </ul>
                         
                    
                        <a href="checkout.php" style="text-align : center" class="primary-btn">Proceed to checkout</a>
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