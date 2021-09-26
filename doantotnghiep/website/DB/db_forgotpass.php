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
    $phone  = isset($_POST['phone']) ? $_POST['phone'] : '';  
    $uni_acc=DP::run_query("SELECT * from account where phone='$phone'",[],2);
    if(!empty($phone)){
        if($uni_acc[0][0]!=''){
            $otp=generate_otp();
            $uni_acc=DP::run_query("UPDATE account set token='$otp' where phone='$phone'",[],1);
            $_SESSION['otp']=$otp;
            $_SESSION['phone']=$phone;
            $_SESSION['fogot']='1';
            header("Location: ../page/forgot-password.php");
        }else{
            $_SESSION['error']="Không tồn tại số";
            header("Location: ../page/forgot-password.php");
        }
    }else{
        $_SESSION['error']="Không được để trống";
        header("Location: ../page/forgot-password.php");
    }
    

    ?>