<?php 
session_start();
if(!isset($_SESSION['ses_username']) && !isset($_COOKIE['coo_username'])){
    header("Location: http://localhost/uas_KhairuRizki/gadget/login.php");
    exit();
}
?>