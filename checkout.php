<?php
require './atclass/connection.php';
session_start();
if(!isset($_SESSION['uid']))   
{

    header("location:login.php");
}


if($_POST){
    
    $name = $_POST['fname'];
    $address = $_POST['address'];
    $phone = $_POST['mphone'];
    $payment = $_POST['paymentoption'];
    $date = date('d-m-y');
    $status = "confirmed";
    $uid = $_SESSION['uid'];
   

    $orderq = mysqli_query($connection , "insert into tbl_ordermaster(order_date,user_id,order_status,shipping_name,shipping_mobile,shipping_address,payment_mode) 
    values('{$date}','{$uid}','{$status}','{$name}','{$phone}','{$address}','{$payment}')");
    //inserted order id
    //order details
    $orderid = mysqli_insert_id($connection);
    //fetch cart data 
    $cartq = mysqli_query($connection , "select * from tbl_cart1 where user_id='{$uid}'");
    while($cartdata = mysqli_fetch_array($cartq))
    {
        //cart data
        $pid = $cartdata['prod_id'];
        $qty = $cartdata['prod_qty'];
        //prduct data 
        $pq = mysqli_query($connection , "select * from tbl_product where prod_id='{$pid}'");
        $pdata = mysqli_fetch_array($pq);
        $price = $pdata['prod_price'];
        //order details add 
        $orderdetailsid = mysqli_query($connection , " insert into tbl_orderdetails (order_id,prod_id,prod_qty,prod_price)
        values('{$orderid}','{$pid}','{$qty}','{$price}')");
        //cart total
        mysqli_query($connection,"delete from tbl_cart1 where cart_id = '{$cartdata['cart_id']}'");
    }
    header("location:thanks.php");

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

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <!-- Css Styles --> 
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form  method="post">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p> Name </p>
                                        <input type="text" name="fname" placeholder=" Enter Name">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="checkout__input">
                              Address<input type="text"  name="address" placeholder="Enter Address" class="checkout__input__add"> 
                                <!-- <textarea name="address" name="address"  placeholder=" Address"  class="checkout__input__add"></textarea> -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Phone</p>
                                        <input type="text"name="mphone" placeholder=" Enter phone no ">
                                    </div>
                                </div>
                                
                            </div>
                            <h6 class="checkout__title">Payment Mode</h6>
                            <input type="radio" id="pcash" value="Cash" checked name="paymentoption" />
							<b>Cash</b>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" id="pupi" value="UPI" name="paymentoption" /> <b>UPI</b>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" id="pcard" value="Card" name="paymentoption" />
							<b>CreditCart /
								Debitcart</b>
                                
                                
                                <div id="upiimg">
								<img src="https://storage.googleapis.com/dara-c1b52.appspot.com/daras_ai/media/a3202e58-17ef-11ee-9a70-8e93953183bb/cleaned_qr.png"
									style="width:100px;height:100px;">

								<p><b>Either Scan Image or Enter UPI No</b></p>
							</div>
							<div class="form-group" id="upitxt">
								<input type="radio" name="upi_method" value="GPay" onchange="return enter_upi_id()">
								<img src="https://t3.ftcdn.net/jpg/06/16/18/18/360_F_616181843_l404nbV07vMiXDZ1IhWiqZRDpetpuigu.jpg"
									style="width: 150px;">
								<br>
								<input class="form-control uip_id" type="varchar" name="txt1" placeholder="UPI ID"
									>
							</div>

							<div class="form-group" id="txt1">

								<label for="">Name<span>*</span></label>
								<input class="form-control" type="varchar" name="txt1" placeholder="Name">
							</div>
							<div class="form-group" id="txt2">
								<label for="">Card No<span>*</span></label>
								<input class="form-control" type="number" name="txt2" placeholder="4134 - 1024 - 3640">
							</div>
							<div class="form-group" id="txt3">
                                <label for="">CVV<span>*</span></label>
								<input class="form-control" type="number" name="txt3" placeholder="Card No">
							</div><hr>
                          
                            <input type="submit" class="site-btn" value="Place ORDER">
                           
                        </div>
                        <div class="col-lg-5">
                    <div class="cart__discount">
                        <h6> Order Summary Amount</h6>
                        <hr>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        
                        
                        <ul>
                           
                            <?php
                            $userid = $_SESSION['uid'];
                            $q = mysqli_query($connection , "select * from tbl_cart1 where user_id = '{$userid}' " ); 
                                  while ($data = mysqli_fetch_array($q)){

                                //product data fetch 
                                $pq = mysqli_query($connection , "select * from tbl_product where prod_id = {$data['prod_id']}");
                                while($pdata = mysqli_fetch_array($pq))
                                
                              echo "<li> Name  <span> {$pdata['prod_name']} </span> <br>Price <span> {$pdata['prod_price']}</span></li>";
                              echo "<li>Delivary Charges <span>  <strike> ₹ 50</strike> </span></li>";      
                            }
                             ?>

                         
                         
                        </ul>
                         
                    
                        <input type="submit" class="site-btn" value="Place ORDER" ><a href="thanks.php" style="text-align : center" ></a>
                    </div>
                </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function () {
		$("input[name='paymentoption']").click(function () {
			if ($("#pcard").is(":checked")) {
				$("#txt1").show();
				$("#txt2").show();
				$("#txt3").show();
				$("#upitxt").hide();
				$("#upiimg").hide();
			} else if ($("#pupi").is(":checked")) {

				$("#txt1").hide();
				$("#txt2").hide();
				$("#txt3").hide();
				$("#upitxt").show();
				$("#upiimg").show();
			} else {
				$("#txt1").hide();
				$("#txt2").hide();
				$("#txt3").hide();
				$("#upitxt").hide();
				$("#upiimg").hide();
			}
		});
	});

	$(document).ready(function () {
		$("#txt1").hide();
		$("#txt2").hide();
		$("#txt3").hide();
		$("#upitxt").hide();
		$("#upiimg").hide();
	});

	$(".uip_id").hide();
	function enter_upi_id() {
		$(".uip_id").show();
	}
</script>

<script>
	$("#pay_now").click();
</script>