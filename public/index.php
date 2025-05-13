<?php

require ('../atclass/connection.php');
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/cart':
        require __DIR__ . '/../src/controllers/cart.php';
        break;
    case '/login':
        require __DIR__ . '/../src/controllers/login.php';
        break;
    
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
    <title>FurniVibe | Shape Your Space</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->


    <!-- Offcanvas Menu Begin -->
  
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   <?php
   include '../src/themepart/header.php';
   ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-3.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Something You Are Lokking!</h6>
                                <h2>Where Comfort Meets Style</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="/ng2/src/controller/shop.php" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Wellness Starts Here</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
   
    <!-- Banner Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <!-- <li data-filter=".new-arrivals">New Arrivals</li> -->
                        <li class="active" data-filter="*">Best Sellers</li>
                        <!-- <li data-filter=".hot-sales">Hot Sales</li> -->
                    </ul>
                </div>
                <?php
                  $q = mysqli_query($connection,"select * from tbl_product limit 9");
    
   
                while($data = mysqli_fetch_array($q))
                {

                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic" >
                                <a href="shop-details.php?product_id=<?php echo $data['prod_id'];?>  ">
                                        <img   width="230px" src="../admin/uploads/<?php echo $data['prod_photo']?>" >
                                    </a>
                                </div>
                                <div class="product__item__text">
                                <a href="shop-details.php?product_id=<?php echo $data['prod_id'];?>  ">
                                <h6><?php echo $data['prod_name'];?></h6></a>
                                   

                                    <h5>₹<?php echo $data['prod_price'];?></h5>
                                    
                                    <div class="product__color__select" >
                                        <form method="post" class='btn btn-light'>
                                            <a href="shop-details.php?product_id=<?php echo $data['prod_id'];?>  ">details</a>
                                        </form>
                                        <!-- <input type="button" value="Add To Cart"  class="btn btn-outline-primary"> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                            }
                        ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
  
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
  
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Trendy Furniture Updates</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/furniture-3.jpg">
                
                    </div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 12 April 2025</span>
                        <h5>Top Sofa Styles for Modern Living Rooms</h5>
                        <a href="#">Read More</a>
                    </div>
            </div>
                </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/furniture-2.png"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 05 April 2025</span>
                        <h5>Choosing the Right Dining Set for Your Space</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/furniture-1.png"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 28 March 2025</span>
                        <h5>How to Blend Comfort and Style in Bedroom Furniture</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <?php

        include '../src/themepart/footer.php';


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
