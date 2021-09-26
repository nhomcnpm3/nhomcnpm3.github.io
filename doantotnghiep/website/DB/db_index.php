<?php 
        include $level."libr/connectDB.php";
        $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
    if($id!=''){// trường hợp đã đăng nhập rồi
        $fashionarriv=DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='fs01'",[],2);//lấy ra sản phẩm có loại là .. 
        $babykidsarriv=DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='kd01'",[],2); 
        $beautyarriv= DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='bt01'",[],2); 
        $electronicarriv= DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='ao01'",[],2); 
        $products=DP::run_query("SELECT * FROM SANPHAM WHERE sale='20'",[],2);
        $youlike =DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='fs01'",[],2); 
        $bannerend=DP::run_query("SELECT * FROM banner WHERE trangthai=1",[],2);
        $banner=DP::run_query("SELECT * FROM banner WHERE trangthai=0",[],2);
        $mycart=DP::run_query("SELECT * FROM (giohang inner join SANPHAM on giohang.masp=SANPHAM.masp) inner join KHACHHANG on giohang.sdt=KHACHHANG.IDKH where giohang.sdt=$id",[],2);
        $myhd=DP::run_query("SELECT * FROM ((HOADONBAN inner join CT_HOADON on HOADONBAN.MAHD=CT_HOADON.IDHD) inner join KHACHHANG on HOADONBAN.IDKH=KHACHHANG.IDKH) INNER JOIN SANPHAM on SANPHAM.MASP=CT_HOADON.IDSP where HOADONBAN.IDKH=$id",[],2);
        $sumcart=DP::run_query("SELECT sum(SANPHAM.GIASI1*giohang.soluong) from SANPHAM INNER JOIN giohang on SANPHAM.MASP=giohang.masp WHERE giohang.sdt=$id",[],2);
        $sumcartsoluong=DP::run_query("SELECT sum(soluong) from giohang inner join KHACHHANG on giohang.sdt=KHACHHANG.IDKH WHERE giohang.sdt=$id",[],2);
        $khachhang=DP::run_query("SELECT * from KHACHHANG where IDKH=$id",[],2);
        $getcheckout=DP::run_query("SELECT * from giohang inner join SANPHAM WHERE sdt=$id and giohang.masp=SANPHAM.MASP",[],2);
    }
    else{// chưa đăng nhâp xuất nhưng dữ liệu này
        $fashionarriv=DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='fs01'",[],2);
        $babykidsarriv=DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='kd01'",[],2);
        $beautyarriv= DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='bt01'",[],2); 
        $electronicarriv= DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='ao01'",[],2);  
        $products=DP::run_query("SELECT * FROM SANPHAM WHERE sale='20'",[],2); 
        $youlike =DP::run_query("SELECT * FROM SANPHAM WHERE MALOAISP='fs01'",[],2);
        $bannerend=DP::run_query("SELECT * FROM banner WHERE trangthai=1",[],2);
        $banner=DP::run_query("SELECT * FROM banner WHERE trangthai=0",[],2);
    }
    ?>