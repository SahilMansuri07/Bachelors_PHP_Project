<?php

session_start();
require './atclass/connection.php'; 


session_destroy();
header("location:login.php");

?>