<?php 
    session_start();
    unset($_SESSION['cart']);
    setcookie("id", $id, time()-3600,'/');
    header("location:../../website/page/login.php");
?>