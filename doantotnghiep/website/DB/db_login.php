<?php
    include "../libr/connectDB.php";
        $check = isset($_POST['email']) ? $_POST['email'] : '';
        $pass1 = isset($_POST['pass']) ? $_POST['pass'] : '';
        if(!empty($check) && !empty($pass1)){
            $loginuser=DP::run_query("SELECT * from account where phone='$check' OR email='$check' or user_name='$check'",[],2);
            $puser=$loginuser[0]['password'];
            if($puser!=''){
                $user_pass = md5($pass1);
                if($user_pass===$puser){
                    $iduser=$loginuser[0]['Uni_acc'];
                    setcookie("id", $iduser, time() + 3600, "/");
                    echo"success";
                }else{
                    echo "Mật khẩu hoặc tài khoản không trùng khớp";
                }
            }else{
                echo"Tài khoản không tồn tại";
            }
        }else{
            echo"không được để trống";
        }
        
    
?>
