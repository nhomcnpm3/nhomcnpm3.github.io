<?php
    $isrthd = isset($_POST['inserthoadon']) ? $_POST['inserthoadon'] : '';
    include $level."config.php";
    include $level."DB/db_cart.php";
    include $level.head_path."header.php";
    include $level.com_general_path."bannerPopup.php"; 

 if ($isrthd=="PAY" ){   
    }
    else{
        include $level.com_general_path."newsLetterPopup.php";
        include $level.com_general_path."mainHeader.php";
    }

    if($index_layout==true){
        include $level.com_idx_path."brandBanner.php";
        include $level.com_idx_path."hotDealsProduct.php";
        include $level.com_idx_path."bigBanner.php";
        include $level.com_idx_path."arrivalsProduct1.php";
        include $level.com_idx_path."arrivalsProduct2.php";
        include $level.com_idx_path."likeProduct.php";
        include $level.com_idx_path."brandBannerend.php";

    }if($err404_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_404_path."error404.php";
    
    }
    if($profile_layout==true){
        include $level.com_profile_path."ProfileUser.php";
    }
    if($pageprofile_layout==true){
        include $level.com_profile_path."profilepers.php";
    }
    if($about_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_about_path."aboutUS.php";    
    }
    if($blog_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_blog_path."blogPage.php";
    }
    if($cart_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_cart_path."cartMain.php";
    }
    if($compare_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_compare_path."comparePage.php";
    
    }
    if($contact_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_contact_path."contact.php";
    
    }
    if($fogot_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_fogot_path."registerAccount.php";
    }
    if($login_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_login_path."loginPage.php";
    }
    if($product_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_product_path."realateProduct.php";
        
    }
    if($register_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_register_path."registerAccount.php";
    }
    if($shop_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_shop_path."shopPage.php";
    }
    if($single_blog_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_singleBlog_path."singleBlog.php";
    }
    if($wishlist_layout==true){
        include $level.com_general_path."breadCrumb.php";
        include $level.com_wishList_path."wishList.php";
    }
    if($checkout_layout==true){
        include $level.com_checkout_path."com_checkout.php";
        $sessioncart=isset($_SESSION['cart']) ? $_SESSION['cart'] : '';
        var_dump($sessioncart);
        if($sessioncart==""){
            header("location: ../index.php");
        }
    }
    include $level.com_general_path."supportArea.php";
    include $level.footer_path."footer.php";
    include $level.footer_path."quickView.php";
?>