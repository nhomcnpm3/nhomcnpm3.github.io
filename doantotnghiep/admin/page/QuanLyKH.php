<?php
$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
if($id==1){
  $level = "../";
  require $level."DB/SelectData.php";
  $update_SanPham=false;
  $update_nhacungcap=false;
  $update_khachhang=false;
  $index = false;
  $SanPham = false;
  $ncc= false;
  $KH=true;  
  $HD=false;
  include $level."layout.php";
}else{
    header("location: ../../website");
  }
?>