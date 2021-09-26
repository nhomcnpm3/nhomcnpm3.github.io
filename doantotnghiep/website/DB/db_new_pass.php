<?php
    session_start();
    include "../libr/connectDB.php";
    $pass1  = isset($_POST['pass1']) ? $_POST['pass1'] : '';  
    $pass2  = isset($_POST['pass2']) ? $_POST['pass2'] : '';  
    $phone= $_SESSION['phone'];
    if(!empty($pass1)&&!empty($pass2)){
        if($pass1== $pass2){
            $encrypt_pass = md5($pass1);
            $uni_accID=DP::run_query("SELECT Uni_acc from account where phone='$phone'",[],2);
            $id=$uni_accID[0][0];
            $uni_acc=DP::run_query("UPDATE account set password='$encrypt_pass' where phone='$phone'",[],2);
            setcookie("id", $id, time() + 3600, "/");
            header("Location: ../index.php");
        }else{
            $_SESSION['error']="Mật khẩu không trùng khớp";
            header("Location: ../page/forgot-password.php");
        }
    }else{
        $_SESSION['error']="Không được để trống";
        header("Location: ../page/forgot-password.php");
    }
    ?>