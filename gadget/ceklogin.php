<?php 
session_start();
if(!isset($_SESSION['ses_email']) AND !isset($_COOKIE['coo_email'])){
    header("http://localhost/uas_KhairuRizki/gadget/");
}
?>