<?php
  $level = "../";
  require $level."DB/SelectData.php";
   $id = isset($_GET['id']) ? $_GET['id'] : '';
   $update_product= DP::run_query(" SELECT * FROM SANPHAM WHERE MASP='$id'",[],2); 
   if (!$update_product){
    header("location: ../page/QuanlySanPham.php");
 }
 if (!empty($_POST['edit_product']))
 {   

  $tieude         = isset($_POST['name']) ? $_POST['name'] : '';
  $mota    = isset($_POST['mota']) ? $_POST['mota'] : 'NULL';
  $gianhap         = isset($_POST['gianhap']) ? $_POST['gianhap'] : '';
  $giasi1       = isset($_POST['giasi1']) ? $_POST['giasi1'] : '';
  $giasi2         = isset($_POST['giasi2']) ? $_POST['giasi2'] : '';
  $sale    = isset($_POST['sale']) ? $_POST['sale'] : '';
  $img1    = isset($_POST['img1']) ? $_POST['img1'] : '';
  if($img1==''){
    $img1=$update_product[0]['img1'];
  }
  var_dump($img1);

  $tinhtrang=isset($_POST['action']) ? $_POST['action'] : ''; 
  if($tinhtrang=="Enable"){
    $tinhtrang=1;
  }
  else{
    $tinhtrang=0;

  }
  $errors = array();
  if (empty($tieude)){
      $errors['tieude'] = 'Chưa nhập tên sản phẩm!';
  }
   
  if (empty($gianhap)){
      $errors['gianhap'] = 'Chưa nhập giá';
  }
  if (empty($giasi1)){
    $errors['giasi1'] = 'Chưa nhập giá sỉ 1!';
}
 
if (empty($giasi2)){
    $errors['giasi2'] = 'Chưa nhập giá sỉ 2';
}
if (empty($sale)){
  $errors['sale'] = 'Chưa nhập sale!';
}

if (empty($gianhap)){
  $errors['gianhap'] = 'Chưa nhập giá';
}
if (!$errors){
    DP::run_query(" UPDATE SANPHAM SET
    tieude = '$tieude',
    MOTA = '$mota',
    GIANHAP = $gianhap,
    GIASI1 = $giasi1,
    GIASI2 = $giasi2,
    img1 = '$img1',
    img2 = '$img2',
    sale = '$sale',
    TINHTRANG=$tinhtrang
    WHERE MASP = $id",[],1); 
    echo " UPDATE SANPHAM SET
    tieude = '$tieude',
    MOTA = '$mota',
    GIANHAP = $gianhap,
    GIASI1 = $giasi1,
    GIASI2 = $giasi2,
    img1 = '$img1',
    img2 = '$img2',
    sale = '$sale',
    TINHTRANG=$tinhtrang
    WHERE MASP = $id";
    header("location: ../page/QuanlySanPham.php");
 
}
 }
 $update_SanPham=true;
 $update_nhacungcap=false;
 $update_khachhang=false;
 $index = false;
 $SanPham = false;
 $ncc= false;
 $KH=false;  
 $HD=false;
  include $level."layout.php";
?>