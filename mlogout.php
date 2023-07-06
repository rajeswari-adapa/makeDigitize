<?php
include 'db.php';
include 'header.php';
include 'navbar.php';
session_start(); 
if(isset($_SESSION['cid'])){
    $cid=$_SESSION['cid'];
    $usql=" UPDATE `spermission` SET `slogin`='0' WHERE `sid`='$cid'";
    mysqli_query($con,$usql);
    setcookie("uid","",time()-60);
    setcookie("upassword","",time()-60);
    session_destroy();
    header('Location:login.php');
}
else{
    header('Location:mlogin.php');
}
?>