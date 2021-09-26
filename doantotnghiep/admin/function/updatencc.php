<?php
  $level = "../";
  require $level."DB/SelectData.php";
   $id = isset($_GET['id']) ? $_GET['id'] : '';
   $update_ncc=DP::run_query(" SELECT * FROM NHACUNGCAP WHERE MANCC like '$id'",[],2); 

   if (!$update_ncc){
    header("location: ../page/QuanLyNhaCungCap.php");
 }
 if (!empty($_POST['edit_ncc']))
 {   

 $tenncc         = isset($_POST['tenncc']) ? $_POST['tenncc'] : '';
 $sdt   = isset($_POST['sdt']) ? $_POST['sdt'] : '';
 $diachi         = isset($_POST['diachi']) ? $_POST['diachi'] : '';
 $sotk       = isset($_POST['sotk']) ? $_POST['sotk'] : '';
 $tentk         = isset($_POST['tentk']) ? $_POST['tentk'] : '';
 $tennh    = isset($_POST['tennh']) ? $_POST['tennh'] : '';
 $link         = isset($_POST['link']) ? $_POST['link'] : '';
 $tinhtrang=isset($_POST['action']) ? $_POST['action'] : '';
 
  if($tinhtrang=="Enable"){
   $tinhtrang=1;
  }
  else{
   $tinhtrang=0;

  }
  
  $errors = array();
  if (empty($tenncc)){
      $errors['tenncc'] = 'Chưa nhập nhà cung cấp';
  }
  if (empty($sdt)){
    $errors['sdt'] = 'Chưa nhập giá số điện thoại!';
}
 
if (empty($diachi)){
    $errors['diachi'] = 'Chưa nhập địa chỉ';
}
if (empty($sotk)){
  $errors['sotk'] = 'Chưa nhập số tài khoản!';
}

if (empty($tentk)){
  $errors['tentk'] = 'Chưa nhập tên tài khoản';
}
if (empty($tennh)){
  $errors['tennh'] = 'Chưa nhập tên ngân hàng!';
}

if (empty($link)){
  $errors['link'] = 'Chưa nhập link';
}
if (!$errors){
  DP::run_query(" UPDATE NHACUNGCAP SET
  TENNCC = '$tenncc',
  SDT = '$sdt',
  DCHI = '$diachi',
  SOTK = '$sotk',
  TENTK = '$tentk',
  TENNH='$tennh',
  LINK = '$link',
  TINHTRANG=$tinhtrang
  WHERE MANCC = '$id'",[],1); 

    
    
  header("location: ../page/QuanLyNhaCungCap.php");
}
 }
 $update_SanPham=false;
  $update_nhacungcap=true;
  $update_khachhang=false;
  $index = false;
  $SanPham = false;
  $ncc= false;
  $KH=false;  
  $HD=false;
  include $level."layout.php";
?>