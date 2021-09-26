<?php
  $level = "../";
  require $level."libr/products.php";
   $id = isset($_GET['id']) ? $_GET['id'] : '';
   var_dump($id);

  DP::run_query("DELETE FROM SANPHAM WHERE MASP = '$id'",[],1); 
   header("location: ../page/QuanlySanPham.php");
?>