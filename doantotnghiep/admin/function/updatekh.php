<?php
  $level = "../";
  require $level."DB/SelectData.php";
   $id = isset($_GET['idKH']) ? $_GET['idKH'] : '';
   $update_kh=get_kh($id);

   if (!$update_kh){
    header("location: ../page/QuanLyKH.php");
 }
 if (!empty($_POST['edit_kh']))
 {   

    $data['SDT']         = isset($_POST['SDT']) ? $_POST['SDT'] : '';
    $data['tenkh']         = isset($_POST['tenkh']) ? $_POST['tenkh'] : '';
    $data['dchi']         = isset($_POST['dchi']) ? $_POST['dchi'] : '';
    $data['email']         = isset($_POST['email']) ? $_POST['email'] : '';  
    $data['pass']         = isset($_POST['pass']) ? $_POST['pass'] : '';
    $data['tinhtrang']    = isset($_POST['action']) ? $_POST['action'] : '';
    $data['IDKH']          = isset($_POST['IDKH']) ? $_POST['IDKH'] : '';
    
 
  if($data['tinhtrang']=="Enable"){
    $data['tinhtrang']=1;
  }
  else{
    $data['tinhtrang']=0;

  }
  var_dump($data);
  $errors = array();
  if (empty($data['tenncc'])){
      $errors['tenncc'] = 'Chưa nhập tên nhà cung cấp!';
  }
   
  if (empty($data['sdt'])){
      $errors['sdt'] = 'Chưa nhập số điện thoại';
  }
  if (empty($data['diachi'])){
    $errors['diachi'] = 'Chưa nhập địa chỉ!';
}
 
if (empty($data['sotk'])){
    $errors['sotk'] = 'Chưa nhập số tài khoản';
}
if (empty($data['tentk'])){
  $errors['tentk'] = 'Chưa nhập tên tài khoản!';
}

if (empty($data['tennh'])){
  $errors['tennh'] = 'Chưa nhập tên ngân hàng';
}
if (empty($data['link'])){
  $errors['link'] = 'Chưa nhập Đường dẫn';
}
if (!$errors){
    edit_kh($data['sdt'],$data['tenkh'], $data['dchi'], $data['email'],$data['pass'],$data['tinhtrang'],$data['IDKH']);
  header("location: ../page/QuanLyKH.php");
}
 }
 $update_khachhang=true;
 $update_nhacungcap=false;
  $update_SanPham=false;
  $index = false;
  $SanPham = false;
  include $level."layout.php";
?>