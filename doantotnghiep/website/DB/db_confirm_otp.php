<?php
    session_start();
    include "../libr/connectDB.php";
    $otp  = isset($_POST['otp']) ? $_POST['otp'] : '';  
    $uni_acc=DP::run_query("SELECT phone from account where token='$otp'",[],2);
    if(!empty($otp)){
        if($uni_acc[0][0]== $_SESSION['phone']){
            $_SESSION['fogot']='2';
            header("Location: ../page/forgot-password.php");
        }else{
            $_SESSION['error']="OTP không đúng";
            header("Location: ../page/forgot-password.php");
        }
    }else{
        $_SESSION['error']="Không được để trống";
        header("Location: ../page/forgot-password.php");
    }
    

    ?>