<?php 
       require_once $level."libr/connectDB.php";
       $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
       
       $sport_type=DP::run_query("SELECT * FROM product p, detail_product d, product_type t WHERE p.ID_pro = d.ID_pro and t.ID_type = p.ID_type and t.ID_type = '13' ",[],2);//lấy ra sản phẩm có loại là .. 
       
    
?>