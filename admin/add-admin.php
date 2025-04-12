<?php

require './class/atclass.php';
$msg = "";

if($_POST)
{
	$name= mysqli_real_escape_string($connection , $_POST ['Aname']);
	$email= mysqli_real_escape_string($connection , $_POST ['Aemail']);
    $password=mysqli_real_escape_string($connection , $_POST ['Apassword']);
    


	$query = mysqli_query($connection, "insert into tbl_admin(Admin_name,Admin_email,Admin_password) 
    values('{$name}','{$email}','{$password}')") or die (mysqli_error($_connection));
    
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
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS -->

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- side nav css file -->

    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
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
					<h2 class="title1">Admin form </h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add Admin information:</h4>
						</div>

					<div class="form-body">
							<form method="post" id="myform" enctype="multipart/form-data">
						<div class="form-group"> 
								<label for="exampleInputEmail1">Admin Name:</label> 
                                <input type="text" class="form-control" id="exampleInputEmail2" name="Aname" placeholder="Enter name "required> 
						</div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Admin Email :</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" name="Aemail" placeholder="Enter Email "required> 
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Admin Password :</label>
                            <input type="password" class="form-control" id="exampleInputPassword7" name="Apassword" placeholder="Enter Password "required> 
                        </div>
    
    
        			        <button type="submit" class="btn btn-default">add Admin</button>
							<button type="reset" class="btn btn-danger">reset</button>
							<button type="button" onclick="window.location='display-Admin.php';" class="btn btn-primary">view </button>
                           
						</div>
						</form>
					</div>				
				</div>
			</div>
    </div>
	
      <div>
   
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
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                showLeftPush = document.getElementById('showLeftPush'),
                body = document.body;

            showLeftPush.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };

            function disableOther(button) {
                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
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