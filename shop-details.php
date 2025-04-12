<?php
session_start();
require './atclass/connection.php'; 

if(!isset($_GET['product_id']))
{
    header("location:shop.php");
}
$id = $_GET['product_id'];
$pq = mysqli_query($connection, "select * from tbl_product where prod_id =  $id   ");
$pdata = mysqli_fetch_array($pq);
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
  

    <!-- Offcanvas Menu Begin -->
   
    
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php
    include './themepart/header.php';
    ?>
    <!-- Header Section End -->

    <!-- Shop Details Section Begin -->

    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop details</h4>
                        <br>
                        <div class="breadcrumb__links">
                            <a href="home.php">Home</a>
                            <a href="shop.php">shop</a>
                            <span>Shop Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class=" justify-content-center">
            <img width="400px" src="upload/<?php echo $pdata['prod_photo'];?>" />
        
        </div>

        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          <B> <?php echo $pdata['prod_name'];?></B>
          </h4>
          <div class="d-flex flex-row my-3">
          </div>

          <div class="mb-3">
            <span class="h5"><?php echo $pdata['prod_price'];?>    /-</span><br>
            <!-- <span class="text-muted"> <?php echo $pdata['prod_stock'];?></span> -->
          </div>

          <p>
          <?php echo $pdata['prod_detail'];?>
          </p>

          <div class="row">

            <!-- <dt class="col-3">Material</dt>
            <dd class="col-9">Cotton, Jeans</dd> -->

            <dt class="col-3">Brand :-</dt>

            <dd class="col-9"> 
                <?php
                   
                	$query = mysqli_query($connection,"select * from tbl_company where company_id= {$pdata['company_id']}   ");
                
                    while($data = mysqli_fetch_array($query))
                    {
                        echo "<option value='{$data['company_id']}'>{$data['company_name']}</option>";
                    }
                ?>
                </dd>

            <dt class="col-3">category :-</dt>
            <dd class="col-9"><?php     
                   $query = mysqli_query($connection,"select * from tbl_category where category_id= {$pdata['category_id']}   ");
                   while($data = mysqli_fetch_array($query))
                   {
                       echo "<option value='{$data['category_id']}'>{$data['category_name']}</option>";
                   }
               ?></dd>
          </div>


          <hr />

          <div class="row mb-4">
            
            <!-- col.// -->
            <div class="col-md-4 col-6 mb-3">
             
              
              </div>
            </div>
          </div>
          <form method="post" action="cartprocess.php"> 
                    Quantity :<input type="number"  value="1" min="1" max="10" name="qty" />
                    <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'] ?>"><br><br>
                    <?php
                    if(isset($_SESSION['uid'])){
                        ?>
                            <input class="btn btn-primary shadow-0" type="submit" value="Add to cart">
                            <?php
                    }else{
                    ?>
                    <a href="login.php">Login here</a>
                    <?php
                    
                    }
            ?>
          </form>
        </div>
      </main>
    </div>
    
  </div>
</section>
<!-- content -->


    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <?php
            $q = mysqli_query($connection,"select * from tbl_product where category_id ='{$pdata['category_id']}' limit 3");   
        while($data = mysqli_fetch_array($q))
        {
                   
          
    
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic" >
                                <a href="shop-details.php?product_id=<?php echo $data['prod_id'];?>  ">
                                        <img   width="250px" src="upload/<?php echo $data['prod_photo']?>" >
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
    <!-- Related Section End -->

    <!-- Footer Section Begin -->
   
    <?php
    include './themepart/footer.php';
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