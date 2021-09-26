<?php 
    include "../DB/db_cart.php";
    unset($_SESSION['cart']);
    setcookie("id", $id, time()-3600,'/');
    header("location:../page/login.php");
?>