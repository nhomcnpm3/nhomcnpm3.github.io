﻿<?php
    $id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
    $err = false;
    $about = false;
    $cart = false;
    $checkout = false;
    $compare = false;
    $contact = false;
    $fgpass = false;
    $idx = true;
    $signin = false;
    $product = false;
    $register = false;
    $shop = false;
    $single_blog = false;
    $wishlist = false;
    $blog = false;
    $level= "";
    include "SQL/index_FashionType.php";
    include "SQL/index_Hotdeal.php";
    include "SQL/index_Banner.php";    
    include "SQL/index_ToysType.php";
    include "SQL/index_ElectronicType.php";
    include "SQL/index_BeautifyType.php";
    include "SQL/index_FoodType.php";
    include "SQL/index_SportType.php";
    include "SQL/index_HouseholdType.php";
    $test=true;
    $index_layout=true;
    $err404_layout=false;
    $about_layout=false;
    $blog_layout=false;
    $cart_layout=false;
    $compare_layout=false;
    $contact_layout=false;
    $fogot_layout=false;
    $login_layout=false;
    $product_layout=false;
    $register_layout=false;
    $shop_layout=false;
    $single_blog_layout=false;
    $wishlist_layout=false;
    $profile_layout=false;
    $pageprofile_layout=false;
    $checkout_layout=false;
    include $level."layout.php";

?>