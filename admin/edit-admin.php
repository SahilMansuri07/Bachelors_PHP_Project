<?php
require './class/atclass.php';
$editid = $_GET['eid'];
if (!isset ($_GET['eid'])  ||  empty($_GET['eid']))
{
    header("location:display-admin.php");
}
$Aselectq = mysqli_query($connection, "select * from tbl_admin  where Admin_id='{$editid}'" ) or die(mysqli_error($connection));
$Aselectrow = mysqli_fetch_array($Aselectq);
//print_r($Aselectrow);
$msg = "";
if($_POST)
{
	$id = $_POST['id'];
	$name= mysqli_real_escape_string($connection , $_POST ['Aname']);
	$email= mysqli_real_escape_string($connection , $_POST ['Aemail']);
    $password=mysqli_real_escape_string($connection , $_POST ['Apassword']);
	
$query=mysqli_query($connection,"update tbl_admin set  Admin_name='{$name}',Admin_email='{$email}',Admin_password='{$password}'where Admin_id ='{$id}'") or die(mysqli_error($connection));

if($query)
{
	echo "<script>alert('record updated');window.location='display-admin.php';</script>";

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
					<h2 class="title1">Admin Form</h2>
					
					<?php
						echo $msg;
						?>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 

							<div class="form-title">
								<h4>Edit Admin Information :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?php echo $Aselectrow['Admin_id'] ?>">
									<div class="form-group">
									 <label for="inputEmail3" class="col-sm-2 control-label">Admin name</label> 
									 <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" value="<?php echo $Aselectrow['Admin_name'] ?>" name="Aname" required> 
									</div>
									</div>
									 <div class="form-group">
									 <label for="inputEmail3" class="col-sm-2 control-label">Admin email</label> 
									 <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" value="<?php echo $Aselectrow['Admin_email'] ?>" name="Aemail" required> 
									</div>
									</div>
									
									 <div class="form-group">
									 <label for="inputEmail3" class="col-sm-2 control-label">Admin password</label> 
									 <div class="col-sm-9"> <input type="password" class="form-control" id="inputEmail3" value="<?php echo $Aselectrow['Admin_password'] ?>" name="Apassword"  required> 
									</div>
									 </div>
									  <div class="col-sm-offset-2">
										<button type="submit" class="btn btn-info">Update admin </button> 	  
									  <button type="button" onclick="window.location='display-admin.php';" class="btn btn-primary">View</button>
									</div>
								 </form> 
							</div>
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