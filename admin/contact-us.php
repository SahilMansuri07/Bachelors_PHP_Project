<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {
    $name = $_POST['txt1'];
    $mobile = $_POST['txt2'];
    $email = $_POST['txt3'];
    $message = $_POST['txt4'];

    $msg = "Name is $name  <br/> Mobile No is : $mobile <br/> Email is $email <br/>Message is $message";



    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ngccaproject@gmail.com';                     //SMTP username
        $mail->Password   = 'xnyaqvzjakyhqrgt';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ngccaproject@gmail.com', 'Mailer');
        $mail->addAddress('training.akashtechnolabs@gmail.com', 'Joe User');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Contact Details from Website';
        $mail->Body    = $msg;
        $mail->AltBody = $msg;

        $mail->send();
        echo "<script>alert('Thank you for contacting us');</script>";;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
<html>

<body>
    <form method="post">

        Name : <input type="text" name="txt1" required /> <br />
        Mobile : <input type="text" name="txt2" required /> <br />
        Email : <input type="text" name="txt3" required /> <br />
        Message : <textarea cols='25' rows="10" name="txt4"></textarea><br />
        <input type="submit" />
    </form>
</body>

</html>