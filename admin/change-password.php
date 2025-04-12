<?php
session_start();
$connection = mysqli_connect("localhost","root","","themeforest");
//check login
if(!isset($_SESSION['id'])){
    header("location:login.php");
} 
//submit
if($_POST){
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $id = $_SESSION['id'];
    //fetch old password form db
    $opq = mysqli_query($connection,"select * from tbl_user where user_id='{$id}'");
    $opdata = mysqli_fetch_array($opq);
    //check old password
    if($opass == $opdata['user_password']){
        //compare new and confirm
        if($npass == $cpass){
            //update password
            $uq = mysqli_query($connection,"update tbl_user set user_password='{$npass}'where  user_id='{$id}'");
            if($uq){
            echo"<script>alert('Password Changed');</script>";
        }
    }else{
        echo("<script>alert('New and Confirm Password Not Match');</script>");
    }
}else{
    echo("<script>alert('Old Password Not Match');</script>");
}
}
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

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
	<?php
			include './themepart/sidebar.php';
	?>
	</div>
		<!--left-fixed -navigation-->		
		<!-- header-starts -->
		<?php
			include './themepart/header.php';
	?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Change Password</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="#" method="post">
						<div class="form-group">
                             <label for="exampleInputPassword1">Old Password :</label>
                              <input type="text" class="form-control" id="exampleInputPassword3" name="opass" placeholder="Enter Old Password "required> 
                        </div>
						<div class="form-group">
                             <label for="exampleInputPassword1">New Password :</label>
                              <input type="text" class="form-control" id="exampleInputPassword3" name="npass" placeholder="Enter New Password "required> 
                        </div>
						<div class="form-group">
                             <label for="exampleInputPassword1">Confirm Password :</label>
                              <input type="text" class="form-control" id="exampleInputPassword3" name="cpass" placeholder="Enter Confirm Password "required> 
                        </div>
							
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="forgot-password.php">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign In" value="Submit">
							<!--<div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div>-->
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
	    <?php
			include './themepart/footer.php';
		?>
		   
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
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
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>

