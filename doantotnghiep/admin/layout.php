<?php
    include $level."config.php";
    include $level.head_path."head.php";    
    include $level.comp_general."LeftColumn.php";
    include $level.comp_general."SearchBox.php";
    if($index == true)
    {
        include $level.comp_idx."MainContent.php";
    }
    else if($SanPham == true)
    {
        include $level.comp_QLSP."MainContent.php";
    }
    else if($update_SanPham==true){
        include $level."component/comp_Updateform/UpdateProduct.php";
    }
    else if($ncc==true){
        include $level."component/comp_NCC/MainContentNCC.php";
    }
    else if($update_nhacungcap==true){
        include $level."component/comp_Updateform/UpdateNCC.php";
    }
    else if($KH==true){
        include $level."component/comp_Khachhang/MainContentKH.php";
    }
    else if($HD==true){
        include $level."component/comp_HoaDon/MainContentHD.php";
    }
    else if($update_khachhang==true){
        include $level."component/comp_Updateform/UpdateKH.php";
    }
    include $level.footer_path."addScript.php";
?>