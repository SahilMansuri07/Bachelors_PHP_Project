<?php
 require './atclass/connection.php'; 
session_start();
$prod_id = $_POST['product_id'];
$qty = $_POST['qty'];
$uid = $_SESSION['uid'];

//  login chek
if(!isset($_SESSION['uid']))   
{

    header("location:login.php");
}

$q = mysqli_query($connection  , "insert into tbl_cart1 (prod_id,prod_qty,user_id) 
values('{$prod_id}','{$qty}','{$uid}')" );

header("location:cart.php");

?>