<?php
  session_start();
  if($cart_layout){
  include $level."libr/connectDB.php";
  $khachhang=DP::run_query("SELECT * from KHACHHANG where IDKH=$id",[],2);
  $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '1';// lấy số lượng thêm từ trên giao diện adđ vào cart

  $idsp = isset($_GET['idsp']) ? $_GET['idsp'] : '';
   if($idsp!=""){
        $product= DP::run_query("SELECT * from SANPHAM where MASP=$idsp",[],2);
        if(isset($_SESSION['cart'][$idsp])){
            $_SESSION['cart'][$idsp]['soluong']=$_SESSION['cart'][$idsp]['soluong']+1;// nếu session masp đã có rồi thì tăng lên 1
        }else{// nếu chưa có tạo 1 session mới 
            $_SESSION['cart'][$idsp]= array("idsp"=>$idsp,"tensp"=>$product[0]['tieude'],"gia"=>$product[0]['GIASI2'],"soluong"=>$quantity,"img1"=>$product[0]["img1"],"img2"=>$product[0]["img2"]);
        }
    }
    $idsps= isset($_GET['idsps']) ? $_GET['idsps'] : '';// lấy id khi click xoá sản phẩm
    if($idsps!=''){
        unset($_SESSION['cart'][$idsps]);// cái này t dùng để xoá 1 sản phẩm = id được lấy ở trên
    }
    if(isset($_POST['update'])=="Update+Cart"){// dùng để cập nhật số lượng trong giỏ hàng

        foreach($_POST as $idspss=>$soluong){
            
            if(($soluong==0) && (is_numeric($soluong))){
                unset ($_SESSION['cart'][$idspss]);
            }elseif(($soluong>0) && (is_numeric($soluong))){
                $_SESSION['cart'][$idspss]['soluong']=$soluong;
            }
        }    
    }
}elseif($shop_layout){// này do làm trang search trễ nên thêm ở đây để bẫy lỗi
    include $level."libr/connectDB.php";
  $khachhang=DP::run_query("SELECT * from KHACHHANG where IDKH=$id",[],2);
}
?>