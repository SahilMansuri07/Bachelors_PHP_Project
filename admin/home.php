<?php
session_start();
echo "HI".$_SESSION['name'];
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
echo"<a href='logout.php'>Logout</a> <br>" ;

echo"<a href='change-password.php'>Change password</a>";
?>
