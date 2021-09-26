<?php
  $level = "../";
  require $level."libr/products.php";
   $id = isset($_GET['IDKH']) ? $_GET['IDKH'] : '';
   var_dump($id);
   $kt = DP::run_query(" SELECT TINHTRANG FROM KHACHHANG WHERE IDKH = '$id'",[],2);
if($kt[0][0]==true)
{
   DP::run_query(" UPDATE KHACHHANG SET TINHTRANG = 0 WHERE IDKH = '$id'",[],1);
}
else
{
  DP::run_query(" UPDATE KHACHHANG SET TINHTRANG = 1 WHERE IDKH = '$id'",[],1);
}
  header("location: ../page/QuanLyKH.php"); 
?>