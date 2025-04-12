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
            $mail->Password   = 'qaoilapqzhctcveq';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('ngccaproject@gmail.com', 'medical');
            $mail->addAddress('sahilmansuri881.o@gmail.com', 'sahil');     //Add a recipient
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
<html>
    <body>
        <form method="post">
        Email : <input type="email" name="email"/>
        <input type="submit"/>
        </form>
    </body>
</html>