<?php 
       require_once $level."libr/connectDB.php";
       $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
       
       $banner=DP::run_query("SELECT * FROM  banner",[],2); 
       
    
?>