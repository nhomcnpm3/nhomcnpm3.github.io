<?php
$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
    $level= "../";
    $err = false;
    $about = false;
    $cart = false;
    $checkout = false;
    $compare = false;
    $contact = false;
    $fgpass = false;
    $idx = false;
    $signin = false;
    $product = true;
    $register = false;
    $shop = false;
    $single_blog = false;
    $wishlist = false;
    $blog = false;

    $index_layout=false;
    $err404_layout=false;
    $pageprofile_layout=true;
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
    $checkout_layout=false;
    include $level."DB/db_index.php";
    include $level."layout.php";
?>