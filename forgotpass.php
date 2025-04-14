<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './atclass/connection.php'; 
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


<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Male_Fashion Template">
  <meta name="keywords" content="Male_Fashion, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FurniVibe | Shape Your Space</title>

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
  <!-- <div id="preloder">
            <div class="loader"></div>
        </div> -->

  <!-- Offcanvas Menu Begin -->

  <!-- Offcanvas Menu End -->

  <!-- Header Section End -->
  <!-- Header Section Begin -->
  <?php
    include "./themepart/header.php";
?>

  <!-- Breadcrumb Section Begin -->
  <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5"> Forget Password </h2>

                <form method="post" id="myform" enctype="multipart/form-data">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    Email address :<input type="email" name="email" id="form2Example1" class="form-control" />
                      <label class="form-label" for="form2Example1"></label>
                    </div>

                    <!-- Password input -->

                    <!-- 2 column grid layout for inline styling -->
                  

                    <!-- Submit button -->
        
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send Email</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="signin.php">Register</a></p> 
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Checkout Section Begin -->

  <!-- Checkout Section End -->

  <!-- Footer Section Begin -->
  <?php
include "./themepart/footer.php";

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