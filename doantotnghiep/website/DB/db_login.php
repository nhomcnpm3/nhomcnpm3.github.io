<?php
    include "../libr/connectDB.php";
        $sdt1 = isset($_GET['email']) ? $_GET['email'] : '';
        $pass1 = isset($_GET['pass']) ? $_GET['pass'] : '';
        $loginuser=DP::run_query("SELECT IDKH from KHACHHANG where (SDT='$sdt1' or EMAIL='$sdt1') and pass='$pass1';",[],2);
        $iduser=$loginuser[0][0];
        if($iduser!=''){
            $loginstatus =DP::run_query("SELECT IDKH from KHACHHANG where IDKH='$iduser' AND TinhTrang =1  ",[],2);
            if($loginstatus[0][0] != ''){
                setcookie("id", $iduser, time() + 3600, "/");
                header("location: ../index.php");
            }
            else{
                header("location: ../page/login.php?status=0");
            }
        }
        else{
            header("location: ../page/login.php?status=1");
        }
        if (!empty($_SESSION['email'])){
            unset($_SESSION['email']);
        }
        if (!empty($_SESSION['pass2'])){
            unset($_SESSION['pass2']);
        }
        
    
?>
