<?php 
session_start();
session_destroy();
setcookie("coo_username", "", time()-(3600*24*30), "/");
header("Location: login.php");
exit();

