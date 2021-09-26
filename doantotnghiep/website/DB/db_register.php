<?php
    include "../libr/connectDB.php";

  $sdt        = isset($_GET['phone']) ? $_GET['phone'] : '';
  $tenkh1         = isset($_GET['firstname']) ? $_GET['firstname']: '';
  $tenkh2         = isset($_GET['lastname']) ? $_GET['lastname']: '';
  $tenkh3=$tenkh1." ".$tenkh2;
  $dchi         = isset($_GET['diachi']) ? $_GET['diachi'] : '';
  $email         = isset($_GET['email']) ? $_GET['email'] : '';  
  $pass         = isset($_GET['pass']) ? $_GET['pass'] : '';
    $countkh=DP::run_query("SELECT count(IDKH) from KHACHHANG",[],2);
    $id=$countkh[0]['count(IDKH)']+1;
    $kiemtraemail=DP::run_query("SELECT EMAIL from KHACHHANG where EMAIL='$email'",[],2);
    $kiemtrasdt=DP::run_query("SELECT SDT from KHACHHANG where SDT='$sdt'",[],2);
    if($kiemtrasdt[0][0]!=''&& $kiemtraemail[0][0]!='')
    {
      header("Location: ../page/register.php?status=2");
    }
    else if($kiemtrasdt[0][0]!='')
    {
      header("Location: ../page/register.php?status=0");
    }
    else if($kiemtraemail[0][0]!='')
    {
      header("Location: ../page/register.php?status=1");
    }
    else{
      DP::run_query("INSERT INTO KHACHHANG VALUES('$sdt','$tenkh3','$dchi','$email','$pass',1,'$id')",[],1);
      setcookie("id", $id, time() + 3600, "/");
      header("Location: ../index.php");
    }
       
    ?>