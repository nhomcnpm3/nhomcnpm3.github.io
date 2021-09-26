<?php 
        include $level."libr/connectDB.php";
        $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
    if($id!=''){// trường hợp đã đăng nhập rồi
        $sale =DP::run_query("SELECT * FROM product WHERE MALOAISP='fs01'",[],2);

    }
    else{// chưa đăng nhâp xuất nhưng dữ liệu này
    }
    ?>