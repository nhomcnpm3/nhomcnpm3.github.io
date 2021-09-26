<?php 
       require_once $level."libr/connectDB.php";
       $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
       
       $hotdeal=DP::run_query("SELECT * FROM product p, detail_product d WHERE p.ID_pro = d.ID_pro ORDER BY p.quantity_sell LIMIT 5 ",[],2); 
       
    
?>