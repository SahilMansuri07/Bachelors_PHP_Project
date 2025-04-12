<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$connection = mysqli_connect("localhost","root","","ksdb");
if($_POST)
{
    $email = $_POST['email'];
    $q = mysqli_query($connection,"select * from tbl_student where st_email='{$email}'");
    $data = mysqli_fetch_array($q);
    $count = mysqli_num_rows($q);
    if($count==1)
    {
        //New Password Generate 
        $otp = rand(1111,9999);
        mysqli_query($connection,"update tbl_student set st_password='{$otp}' where st_email='{$email}' ");

      $msg = "Hi {$data['student_name']},<br/> your temp password is ".$otp." <br/>Kindly change once you logged in with this password";
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'mailtesterat.2021@gmail.com';                     //SMTP username
            $mail->Password   = 'bmxhjhxfjxoxfaxs';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('mailtesterat.2021@gmail.com', 'GLS Demo');
            $mail->addAddress($email, 'Joe User');     //Add a recipient
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