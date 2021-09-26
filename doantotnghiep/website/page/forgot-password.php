<?php
$id=isset($_COOKIE["id"]) ? $_COOKIE["id"] : '';
    $err = false;
    $about = false;
    $cart = false;
    $checkout = false;
    $compare = false;
    $contact = false;
    $fgpass = true;
    $idx = false;
    $signin = false;
    $product = false;
    $register = false;
    $shop = false;
    $single_blog = false;
    $wishlist = false;
    $blog = false;
    $level= "../";

    $index_layout=false;
    $err404_layout=false;
    $about_layout=false;
    $blog_layout=false;
    $cart_layout=false;
    $compare_layout=false;
    $contact_layout=false;
    $fogot_layout=true;
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