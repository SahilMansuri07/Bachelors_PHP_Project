<?php

require './class/atclass.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<title>ESSENCIAL E-MEDICAL STORE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" href="myimages/first-aid-kit.png"type="image/x-icon">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	    <?php
    	  include './themepart/sidebar.php';
   		 ?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php
                include './themepart/header.php';

        ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
			
			<div class="col_3">
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-dollar icon-rounded"></i>
                            <div class="stats">
                                <h5><strong> <?php $q = mysqli_query($connection, "select * from tbl_product");
                                                $count = mysqli_num_rows($q);
                                                echo "$count Record Found"; ?></strong></h5>
                                <span>Total Products</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong><?php $q = mysqli_query($connection, "select * from tbl_category");
                                            $count = mysqli_num_rows($q);
                                            echo "$count Record Found"; ?></strong></h5>
                                <span>Total Categaries</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-money user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong><?php $q = mysqli_query($connection, "select * from tbl_ordermaster");
                                            $count = mysqli_num_rows($q);
                                            echo "$count Record Found"; ?></strong></h5>
                                <span>Total Order Placed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong><?php $q = mysqli_query($connection, "select * from tbl_admin");
                                            $count = mysqli_num_rows($q);
                                            echo "$count Record Found"; ?></strong></h5>
                                <span>Total Admins</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong><?php $q = mysqli_query($connection, "select * from tbl_user");
                                            $count = mysqli_num_rows($q);
                                            echo "$count Record Found"; ?></strong></h5>
                                <span>Total Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>




				<div class="tables">	
					<h2 class="title1"> Product</h2>
					    <div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
                            <h4>Product details :  <a href="add-product.php"> <img style='width:20px;' src='myimages/add.png'></a></h4>
						    <table class="table table-hover"> 
                                <thead>
                                     <tr> 
                                        <th>#</th> 
                                         <th>Name</th>
                                         <th>price </th> 
										 <th>photo path</th> 
										 <th>details</th> 
										 <th>stock</th> 
										 <th>category id</th> 
										 <th>company id</th> 
                                         <th>Action </th>
                                     </tr> 
                                </thead> 
                                <tbody> 
                                <?php

												if(isset($_GET['did']))
												{
													$did = $_GET['did'];

													$deleteq = mysqli_query($connection , "delete from tbl_product where prod_id = '{$did}'") or die (mysqli_error($connection));
													if($deleteq){
														echo "<script>alert ('Record deleted ');</script>";
													}
												}
												$selectq = mysqli_query($connection , "select * from tbl_product limit 8") or die (mysqli_error($connection));
												$count = mysqli_num_rows($selectq);
												echo $count  ,  "Records found ";
												$i=0;
												while($productrow = mysqli_fetch_array($selectq))
												{
													echo "<tr style='center'>";
													$i++;
														echo"<td>$i</td>";
														echo"<td>{$productrow['prod_name']}</td>";
														echo"<td>{$productrow['prod_price']}</td>";
														echo"<td><img style='width: 150px'src='uploads/{$productrow['prod_photo']}'></td>";
														echo"<td>{$productrow['prod_detail']}</td>";
														echo"<td>{$productrow['prod_stock']}</td>";
														
														echo"<td>{$productrow['category_id']}</td>";
														echo"<td>{$productrow['company_id']}</td>";
														echo "<td><a href ='edit-product.php?eid={$productrow['prod_id']}'><img style='width:16px;' src='myimages/editing.png'> Edit</a> |  <a href ='display-product.php?did={$productrow['prod_id']}'><img style='width:16px;' src='myimages/delete.png'> delete </a></td>";
													echo "<tr>";

												}
											?>                    
                                </tbody> 
                            </table>
					    </div>
				</div>
			</div>
		</div>
		
		
				
	
	<!-- for amcharts js -->
			<script src="js/amcharts.js"></script>
			<script src="js/serial.js"></script>
			<script src="js/export.min.js"></script>
			<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="js/index1.js"></script>

	<!-- for amcharts js -->
			<script src="js/amcharts.js"></script>
			<script src="js/serial.js"></script>
			<script src="js/export.min.js"></script>
			<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="js/index1.js"></script>
				
	<!--footer-->
	<?php
	include "./themepart/footer.php";
	?>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
	
	
	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
    <script src="js/SimpleChart.js"></script>
   
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>