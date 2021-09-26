<?php 
    $masp = isset($_GET['idsp']) ? $_GET['idsp'] : '007';
    // lấy thông tin chi tiết sản phẩm
    $get_product=DP::run_query("SELECT * from SANPHAM where MASP=$masp",[],2); 

?>