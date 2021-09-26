<?php 
       require_once $level."libr/connectDB.php";
       $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
       
       $all_type=DP::run_query("SELECT * FROM product p, detail_product d WHERE p.ID_pro = d.ID_pro ",[],2);//lấy ra sản phẩm có loại là .. 
       
    
?>