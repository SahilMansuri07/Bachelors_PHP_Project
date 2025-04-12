<?php

//$connection = mysqli_connect("localhost","root","","themeforest");

require './class/atclass.php';
$msg = "";

if($_POST)
{
	$name= mysqli_real_escape_string($connection , $_POST ['uname']);
    $dob=mysqli_real_escape_string($connection , $_POST ['udob']);
    $gender= mysqli_real_escape_string($connection , $_POST ['ugender']);
    $address=mysqli_real_escape_string($connection , $_POST ['uaddress']);
    $mobile= mysqli_real_escape_string($connection , $_POST ['umobile']);
    $email= mysqli_real_escape_string($connection , $_POST ['uemail']);
    $password=mysqli_real_escape_string($connection , $_POST ['upassword']);
    


	$query = mysqli_query($connection, "insert into tbl_user(user_name,user_dob,user_gender,user_address,user_mobile,user_email,user_password)
	 values('{$name}','{$dob}','{$gender}','{$address}','{$mobile}','{$email}','{$password}')") or die (mysqli_error($_connection));
    
	if($query)
	{
		$msg = '<div class="alert alert-success" role="alert" >
		record added successfully
		</div>';
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

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

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
<script src="java/jquery-3.7.1.min.js"> </script>
    <script src="java/jquery.validate.js"> </script>

    <script>
        $(document).ready(function () {
            $("#myform").validate();
        });
    </script>
	
    <style>
        .error {
            color: red;
        }
    </style>

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
				<div class="forms">
						<?php
						echo $msg ;
						?>
					<h2 class="title1">User form </h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add User information:</h4>
						</div>

						<div class="form-body">
							<form method="post"id="myform" enctype="multipart/form-data">
								 <div class="form-group"> 
									<label for="exampleInputEmail1">User Name:</label> 
                            <input type="text" class="form-control" id="exampleInputEmail2" name="uname" placeholder="Enter name "required> 
						</div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">User Dob :</label>
                              <input type="date" class="form-control" id="exampleInputPassword1" name="udob" placeholder="Enter dob "required> 
                        </div>
						<div class="form-group">
						
							Gender :
							<label>
							Male <input type="radio"  id="exampleInputPassword8"name="ugender" value="male"required>
							Female <input type="radio"  id="exampleInputPassword9" name="ugender"  value="female" required>
							</label>
						</div>           
						<div class="form-group">
                          	  <label for="exampleInputPassword4"required> User Address :</label>
							  <textarea class="form-control" id="exampleInputPassword4" name="uaddress"></textarea>
                        </div> 
                        <div class="form-group">
                             <label for="exampleInputPassword1">User mobile :</label>
                              <input type="text" class="form-control" id="exampleInputPassword5" name="umobile" placeholder="Enter mobile "required> 
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">User Email :</label>
                              <input type="email" class="form-control" id="exampleInputPassword6" name="uemail" placeholder="Enter email "required> 
                        </div>
                        <div class="form-group"> 
                             <label for="exampleInputPassword1">User Password :</label>
                              <input type="password" class="form-control" id="exampleInputPassword8" name="upassword" placeholder="Enter password "required> 
                        </div>
					
					
        			        <button type="submit" class="btn btn-default">add user</button>
							<button type="reset" class="btn btn-danger">reset</button>
							<button type="button" onclick="window.location='display-user.php';" class="btn btn-primary">view </button>
                           
						</div>
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
   
</body>
</html>