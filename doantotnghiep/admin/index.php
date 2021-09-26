<?php
$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
  if($id==1){
  $level = "";
  $update_SanPham=false;
  $update_nhacungcap=false;
  $update_khachhang=false;
  $index = true;
  $SanPham = false;
  $ncc= false;
  $KH=false;  
  $HD=false;
  include $level."layout.php";
  }
  else{
    header("location: ../website");
  }
?>