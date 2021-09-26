<?php 
    include "../libr/connectDB.php";
    $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
    $user  = isset($_POST['username']) ? $_POST['username'] : '';
    $repass  = isset($_POST['repass']) ? $_POST['repass'] : '';
    DP::run_query("UPDATE KHACHHANG SET TENKH='$user', pass='$repass' WHERE IDKH='$id' ",[],1);
    header("Location: ../page/pageprofile.php");
?>