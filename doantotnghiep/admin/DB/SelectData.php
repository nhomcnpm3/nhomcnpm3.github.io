<?php 
    include $level."libr/products.php";
    

     $fashionarriv=DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='fs01'",[],2);
     $babykidsarriv=DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='kd01'",[],2);
     $beautyarriv= DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='bt01'",[],2);
     $electronicarriv= DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='ao01'",[],2);
     $products=DP::run_query("SELECT * FROM SANPHAM WHERE sale='18'",[],2);
     $youlike =DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='fs01'",[],2);
     $bannerend=DP::run_query("SELECT * FROM banner WHERE trangthai='1'",[],2);
     $banner=DP::run_query("SELECT * FROM banner WHERE trangthai='0'",[],2);
     $DSSP=DP::run_query("SELECT * FROM SANPHAM",[],2); 
     $allloaisp=DP::run_query("SELECT * FROM LOAISP",[],2);
     $masp_max=DP::run_query("SELECT MAX(MASP) as MASP FROM SANPHAM ",[],2); 
     $allncc=DP::run_query("SELECT * FROM NHACUNGCAP ",[],2);
     $allkho=DP::run_query("SELECT * FROM KHO ",[],2); 
     $coutncc=DP::run_query(" SELECT count(MANCC) FROM NHACUNGCAP ",[],2); 
     $allKH=DP::run_query("  SELECT * FROM KHACHHANG",[],2); 
     $allHD=DP::run_query("  SELECT * FROM HOADONBAN",[],2); 
     $getallmau=DP::run_query("   SELECT * FROM MAUSAC",[],2); 
     $getallkichthuoc=DP::run_query(" SELECT * FROM KICHTHUOC",[],2); 
    ?>