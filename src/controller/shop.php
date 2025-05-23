<?php
require ('../../atclass/connection.php');

session_start();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FurniVibe | Shape Your Shape</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
  <link rel="stylesheet" href="../../public/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="../../public/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->


    <!-- Offcanvas Menu Begin -->

    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php
    include "../themepart/header.php";
    ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form>
                                <input type="text" name='q' placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <?php
                                                    $cq = mysqli_query($connection, "select * from tbl_category ");
                                                    while ($cdata = mysqli_fetch_array($cq)) {

                                                        echo "<li><a href='shop.php?categoryid={$cdata['category_id']}'>{$cdata['category_name']}</a></li>";


                                                    }
                                                    ?>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Company</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <?php
                                                    $coq = mysqli_query($connection, "select * from tbl_company limit 5");
                                                    while ($codata = mysqli_fetch_array($coq)) {
                                                        echo " <li> <a href='shop.php?company_id={$codata['company_id']}'> {$codata['company_name']}  </li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2>Products</h2>
                    <br>
                    <br>
                    <div class="row">
                        <?php
                        // company id operation 
                        if (isset($_GET['company_id'])) {
                            $coid = $_GET['company_id'];
                            $q = mysqli_query($connection, "select * from tbl_product where company_id= '{$coid}'");

                        }


                        //category id opration
                        else if (isset($_GET['categoryid'])) {
                            $cid = $_GET['categoryid'];
                            $q = mysqli_query($connection, "select * from tbl_product where category_id= '{$cid}'");
                        } else if (isset($_GET['q'])) {
                            $q = $_GET['q'];
                            $q = mysqli_query($connection, "select * from tbl_product where prod_name like '%{$q}%'");
                        } else {
                            $limit = 9; // products per page
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $start_from = ($page - 1) * $limit;

                            $condition = ""; // for filters
                        
                            // Handle company filter
                            if (isset($_GET['company_id'])) {
                                $coid = $_GET['company_id'];
                                $condition = "where company_id = '{$coid}'";
                            }

                            // Handle category filter
                            else if (isset($_GET['categoryid'])) {
                                $cid = $_GET['categoryid'];
                                $condition = "where category_id = '{$cid}'";
                            }

                            // Handle search
                            else if (isset($_GET['q'])) {
                                $q = $_GET['q'];
                                $condition = "where prod_name like '%{$q}%'";
                            }

                            $product_query = "select * from tbl_product $condition limit $start_from, $limit";
                            $q = mysqli_query($connection, $product_query);

                            // For pagination count
                            $count_result = mysqli_query($connection, "select count(*) as total from tbl_product $condition");
                            $count_row = mysqli_fetch_assoc($count_result);
                            $total_records = $count_row['total'];
                            $total_pages = ceil($total_records / $limit);

                        }

                        while ($data = mysqli_fetch_array($q)) {

                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic">
                                        <a href="shop-details.php?product_id=<?php echo $data['prod_id']; ?>  ">
                                            <img width="230px" src="../../admin/uploads/<?php echo $data['prod_photo'] ?>">
                                        </a>
                                    </div>
                                    <div class="product__item__text">
                                        <a href="shop-details.php?product_id=<?php echo $data['prod_id']; ?>  ">
                                            <h6><?php echo $data['prod_name']; ?></h6>
                                        </a>


                                        <h5>₹<?php echo $data['prod_price']; ?></h5>

                                        <div class="product__color__select">
                                            <form method="post" class='btn btn-light'>
                                                <a
                                                    href="shop-details.php?product_id=<?php echo $data['prod_id']; ?>  ">details</a>
                                            </form>
                                            <!-- <input type="button" value="Add To Cart"  class="btn btn-outline-primary"> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                        }
                        ?>
                        <div class="col-lg-12 text-center" style="
                                                .pagination__option a {
                            display: inline-block;
                            margin: 5px;
                            padding: 10px 15px;
                            background: #f3f3f3;
                            color: #333;
                            border-radius: 4px;
                            text-decoration: none;
                        }

                        .pagination__option a:hover {
                            background: #000;
                            color: #fff;
                        }

                                                ">

                                                <div class="pagination__option">
                                                    <?php 
                                       
                                                    for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <a href="shop.php?page=<?php echo $i; ?><?php
                                       if (isset($_GET['categoryid']))
                                           echo '&categoryid=' . $_GET['categoryid'];
                                       if (isset($_GET['company_id']))
                                           echo '&company_id=' . $_GET['company_id'];
                                       if (isset($_GET['q']))
                                           echo '&q=' . $_GET['q'];
                                       ?>"><?php echo $i; ?></a>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <?php
    include "../themepart/footer.php";
    ?>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">

                <input type="text" name='q' placeholder="Search...">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
      <script src="../../public/js/jquery-3.3.1.min.js"></script>
  <script src="../../public/js/bootstrap.min.js"></script>
  <script src="../../public/js/jquery.nice-select.min.js"></script>
  <script src="../../public/js/jquery.nicescroll.min.js"></script>
  <script src="../../public/js/jquery.magnific-popup.min.js"></script>
  <script src="../../public/js/jquery.countdown.min.js"></script>
  <script src="../../public/js/jquery.slicknav.js"></script>
  <script src="../../public/js/mixitup.min.js"></script>
  <script src="../../public/js/owl.carousel.min.js"></script>
  <script src="../../public/js/main.js"></script>
</body>

</html>