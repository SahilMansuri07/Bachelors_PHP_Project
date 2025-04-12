<?php

require './atclass/connection.php'; 

?>
<div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, On All Order Up to ₹500.</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <?php
                            if(isset($_SESSION['uid'])){
                                $name = $_SESSION['uname'];
                                echo "<li> <a href='login.php'>Hi | $name </a> <a href='logout.php'> Log out  </a></li>";
                            }else{
                                ?>
                            <a href="signin.php">Sign in</a>
                            <a href="login.php">Log in</a>
                           
                            <?php
                        }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="header__logo">
                        <a href="home.php">
                            <img src="img/logo2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" style="display: contents;">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./home.php">Home</a></li>
                            <li ><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Category</a>
                                <ul class="dropdown">
                                  <?php
                                  $cq = mysqli_query ($connection , " SELECT * FROM tbl_category");
                                   while($cdata = mysqli_fetch_array($cq)){
                                       echo "<li><a href='shop.php?categoryid={$cdata['category_id']}'> {$cdata['category_name']} </li>";
                                   }
                                    ?>
                                </ul>
                            </li>

                            
        
                            
                            <li><a href="./contact-us.php">Contact us</a></li>
                        
                            <li><a href="cart.php"><span>Cart |</span>
                            <img class="icon" src="img/icon/cart.png" width="10px" alt="">
                         </a></li>
                         <?php 
if(isset($_SESSION['uid'])){
                         ?>
                         <li><a href="#"> My account | <img class="icon" src="img/icon/user.png" width="10px" alt=""></a>
                                <ul class="dropdown">
                                <li><a href="./view-order.php">My Order</a></li>
                                <li><a href="./change-password.php">Change Password</a></li>
                                 <li><a href="./view-feedback.php">View Feedback</a></li>
                                <li><a href="./give-feedback.php">Give Feedback</a></li>
                                <li><a href="./logout.php">Logout</a></li>
                                </ul>
                            </li>
                            <?php 
}else{
    ?>
    <li><a href="./login.php">Login</a></li>
    <?php
}
                            ?>
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
                    </nav>
                    

                </div>
               
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
