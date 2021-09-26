<?php
    session_start();
    include "../libr/connectDB.php";
    function generate_otp($n=4) {
        $generator = "1357902468";
        $result = "";
        for ($i = 1; $i <= $n; $i++) {
            $result .= substr($generator, (rand()%(strlen($generator))), 1);
        }
        return $result;
    }
    $phone=$_SESSION['phone'];
    if(!empty($phone)){
            $otp=generate_otp();
            $uni_acc=DP::run_query("UPDATE account set token='$otp' where phone='$phone'",[],1);
            $_SESSION['otp']=$otp;
            $_SESSION['fogot']='1';
            header("Location: ../page/forgot-password.php");
        }else{
            $_SESSION['error']="vui lòng làm mới trang.";
            header("Location: ../page/forgot-password.php");
        }
    

    ?>