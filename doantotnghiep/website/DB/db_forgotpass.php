<?php
    include "../libr/connectDB.php";

  
    $email  = isset($_GET['email']) ? $_GET['email'] : '';  
    var_dump($email);
    $idkh=DP::run_query("SELECT * from KHACHHANG where EMAIL='$email'",[],2);
    $id=$idkh[0]["IDKH"];
    header("Location: ../page/forgot-password.php?id=$id");

    ?>