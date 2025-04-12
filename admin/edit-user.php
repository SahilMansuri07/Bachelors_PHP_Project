<?php
require './class/atclass.php';
$editid = $_GET['eid'];
if (!isset ($_GET['eid'])  ||  empty($_GET['eid']))
{
    header("location:display-user.php");
}
$uselectq = mysqli_query($connection, "select * from tbl_user  where user_id='{$editid}'" ) or die(mysqli_error($connection));
$uselectrow = mysqli_fetch_array($uselectq);
//print_r($uselectrow);
$msg = "";
if($_POST)
{
	$id = $_POST['id'];
	$name= mysqli_real_escape_string($connection , $_POST ['uname']);
    $dob=mysqli_real_escape_string($connection , $_POST ['udob']);
    $gender= mysqli_real_escape_string($connection , $_POST ['ugender']);
    $address=mysqli_real_escape_string($connection , $_POST ['uaddress']);
    $mobile= mysqli_real_escape_string($connection , $_POST ['umobile']);
    $email= mysqli_real_escape_string($connection , $_POST ['uemail']);
    $password=mysqli_real_escape_string($connection , $_POST ['upassword']);
	
$query=mysqli_query($connection,"update tbl_user set  user_name='{$name}', user_dob='{$dob}', user_gender='{$gender}', user_address='{$address}', user_mobile='{$mobile}', user_email='{$email}',user_password='{$password}'where user_id ='{$id}'") or die(mysqli_error($connection));
 
if($query)
{
	echo "<script>alert('record updated');window.location='display-user.php';</script>";

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

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">

		<!--left-fixed -navigation-->
		<?php
		include './themepart/sidebar.php';
		?>
		<!-- header-starts -->
		<?php
		include './themepart/header.php';
		?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Product Form</h2>
					
					<?php
						echo $msg;
						?>
					
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add Product information:</h4>
						</div>

						<form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $uselectrow['user_id'] ?>">
								 <div class="form-group"> 
									<label for="exampleInputEmail1">User Name:</label> 
								<div class="form-body">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="uname" placeholder="Enter name "> 
						</div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">User Dob :</label>
                              <input type="date" class="form-control" id="exampleInputPassword1" name="udob" placeholder="Enter dob "> 
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">User gender :</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" name="ugender" placeholder="Enter gender "> 
                        </div>
                     
						<div class="form-group">
                            <label for="exampleInputPassword1"> User Address :</label>
							  <textarea class="form-control" name="uaddress"></textarea>
                        </div> 
                        <div class="form-group">
                             <label for="exampleInputPassword1">User mobile :</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" name="umobile" placeholder="Enter mobile "> 
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">User Email :</label>
                              <input type="email" class="form-control" id="exampleInputPassword1" name="uemail" placeholder="Enter email "> 
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">User Password :</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="upassword" placeholder="Enter password "> 
                        </div>
					
					
        			        <button type="submit" class="btn btn-default">update user</button>
							<button type="reset" class="btn btn-danger">reset</button>
							<button type="button" onclick="window.location='display-user.php';" class="btn btn-primary">view </button>
                           
						</div>
						</form>
					 </div>
				</div>
			</div>
		</form>
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