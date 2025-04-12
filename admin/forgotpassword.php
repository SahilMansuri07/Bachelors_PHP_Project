<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$connection = mysqli_connect("localhost","root","","themeforest");
if($_POST)
{
    $email = $_POST['email'];
    $q = mysqli_query($connection,"select * from tbl_user where user_email='{$email}'");
    $data = mysqli_fetch_array($q);
    $count = mysqli_num_rows($q);
    if($count==1)
    {
      $msg = "Hi {$data['user_name']},<br/> your password is ".$data['user_password']." <br/>Do not Share with anyone";
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ngccaproject@gmail.com';                     //SMTP username
            $mail->Password   = 'cykghiiyytjiozdk';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('ngccaproject@gmail.com', 'medical');
            $mail->addAddress($email, 'sahil');     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Forgot Password';
            $mail->Body    = $msg;
            $mail->AltBody = $msg;
            $mail->send();
            echo "<script>alert('Password is sent on email id')</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }else{
        echo "<script>alert('User Not Found')</script>";
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
				<h2 class="title1">Forgot Password</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="#" method="post">
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<!--<input type="password" name="password" class="lock" placeholder="Password" required="">-->
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign In" value="Submit">
							
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





