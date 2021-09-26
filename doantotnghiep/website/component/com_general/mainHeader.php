<!-- Main Header Area Start Here -->
<?php

?>
<header>
            <!-- Header Top Start Here -->
            <div class="header-top-area">
                <div class="container">
                    <!-- Header Top Start -->
                    
                    <div class="header-top">
                        <ul>
                            <li><a href="#">Free Shipping on order over $99</a></li>
                            
                        </ul>
                        <ul>                                          
                            <li><span>Language</span> <a href="#">English<i class="lnr lnr-chevron-down"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="#"><img src="<?php echo $level.img_header_path."1.jpg"?>" alt="language-selector">English</a></li>
                                    <li><a href="#"><img src="<?php echo $level.img_header_path."2.jpg"?>" alt="language-selector">Francis</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li>
                            <li><span>Currency</span><a href="#"> USD $ <i class="lnr lnr-chevron-down"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="#">&#36; USD</a></li>
                                    <li><a href="#"> € Euro</a></li>
                                    <li><a href="#">&#163; Pound Sterling</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li>
                            <?php if($id==''){ ?>
                            <li><a href="#">My Account<i class="lnr lnr-chevron-down"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="<?php echo $level.page_path."login.php"?>">Login</a></li>
                                    <li><a href="<?php echo $level.page_path."register.php"?>">Register</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li> 
                            <?php } else {?>
                                <li><a href="#"><?php echo $khachhang[0]["EMAIL"]?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <!-- Header Top End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            <div class="header-middle ptb-15">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-3 col-md-12">
                            <div class="logo mb-all-30">
                                <a href="<?php echo $level."index.php"?>"><img src="<?php echo $level.img_logo_path."logo.png"?>" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                            <div class="categorie-search-box">
                                <form action="<?php echo $level."page/shop.php"?>">
                                    
                                    <input type="text" name="search" placeholder="I’m shopping for...">
                                    <button><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Categorie Search Box End Here -->
                        <!-- Cart Box Start Here -->
                        <div class="col-lg-4 col-md-12">
                            <div class="cart-box mt-all-30">
                                <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                                    <?php $count1=0;
                                    if (!isset($_SESSION["cart"]) || count($_SESSION["cart"]) < 1)
                                    {?>                                    
                                        <li><a href="<?php if($id!=""){ ?> <?php echo $level."page/cart.php"?> <?php }else{ ?> <?php echo $level."page/login.php"?> <?php }?>"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">0</span><span>cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                                <!-- Cart Box Start -->                     
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                    <a href="#"></a>
                                                        <span class="pro-quantity"></span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="product.php"></a></h6>
                                                        <span class="cart-price"></span>
                                                      
                                                    </div>
                                                    <a class="del-icone" href=""><i class="ion-close"></i></a>
                                                    
                                                </div>
                                   <?php }
                                    else
                                    {
                                        foreach ($_SESSION['cart'] as $value)
                                        {$count1 += $value['soluong'];} ?>
                                    <li><a href="<?php if($id!=""){ ?> <?php echo $level."page/cart.php"?> <?php }else{ ?> <?php echo $level."page/login.php"?> <?php }?>"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro"><?php echo $count1?></span><span>cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                                <!-- Cart Box Start -->
                                                <?php $count=0;
                                                foreach ($_SESSION['cart'] as $value)
                                                { ?>
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                    <a href="#"><img src="<?php echo $level.img_product_path.$value["img1"];?>" alt="cart-image"></a>
                                                        <span class="pro-quantity">x<?php echo $value["soluong"]?></span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="product.php"><?php echo $value["tensp"]?> </a></h6>
                                                        <span class="cart-price"><?php echo $value["gia"]?></span>
                                                      
                                                    </div>
                                                    <a class="del-icone" href="<?php echo $level."page/cart.php"?>?idsps=<?php echo $value['idsp']?>"><i class="ion-close"></i></a>
                                                    
                                                </div>
                                                    <?php $count++; 
                                                    if($count==3)
                                                    {break;} ?>
                                                <?php }
                                    }            
                                                ?>
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer">
                                                   <ul class="price-content">
                                                   <?php
                                                   if (!isset($_SESSION["cart"]) || count($_SESSION["cart"]) < 1)
                                                   {$sumcart=0;} else { ?>
                                                   <?php $sumcart=0; foreach ($_SESSION['cart'] as $value)
                                                   { $sumcart += $value['soluong']* $value['gia'];} }?>

                                                       <li>Subtotal <span>$<?php echo $sumcart?></span></li>
                                                       <li>Shipping <span>0</span></li>
                                                       <li>Taxes <span>0</span></li>
                                                       <li>Total <span>$<?php echo $sumcart?></span></li>
                                                   </ul>
                                                    <div class="cart-actions text-center">
                                                        <a class="cart-checkout" href="<?php echo $level.page_path."checkout.php"?>">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Wish</span><span>list (0)</span></span></a>
                                    </li>
                                    <li><?php if($id==NULL){?><a href="<?php echo $level."page/login.php"?>"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>Sign in</strong> Or</span><span> Join My Site</span</span></a><?php } else {?> <a href="<?php echo $level.page_path."profile.php"?>"><i class="lnr lnr-user"></i><span class="my-cart"><span><strong>Hello <?php echo $khachhang[0]["TENKH"]?></strong><?php }?>



                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            
            <!-- Header Bottom End Here -->
            <!-- Mobile Vertical Menu Start Here -->
            <div class="container d-block d-lg-none">
                <div class="vertical-menu mt-30">
                    <span class="categorie-title mobile-categorei-menu">Shop by Categories </span>
                    <nav>  
                        <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
                            <ul>
                                <li class="has-sub"><a href="#">Automotive & Motorcycle </a>
                                    <ul class="category-sub">
                                        <li class="has-sub"><a href="<?php echo $level.page_path."shop.php"?>">Office chair</a>
                                            <ul class="category-sub">
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Bibendum Cursus</a></li>
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Dignissim Turpis</a></li>
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Dining room</a></li>
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Dining room</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="<?php echo $level.page_path."shop.php"?>">Purus Lacus</a>
                                            <ul class="category-sub">
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Magna Pellentesq</a></li>
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Molestie Tortor</a></li>
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Vehicula Element</a></li>
                                                <li><a href="<?php echo $level.page_path."shop.php"?>">Sagittis Blandit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">gps accessories</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Microphones</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Sports & Outdoors</a>
                                    <ul class="category-sub">
                                        <li class="menu-tile">Cameras</li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Cords and Cables</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">gps accessories</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Microphones</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Home & Kitchen</a>
                                    <ul class="category-sub">
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">kithen one</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">kithen two</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">kithen three</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">kithen four</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Phones & Tablets</a>
                                    <ul class="category-sub">
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">phone one</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Tablet two</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Tablet three</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">phone four</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">TV & Video</a>
                                    <ul class="category-sub">
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">smart tv</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">real video</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Microphones</a></li>
                                        <li><a href="<?php echo $level.page_path."shop.php"?>">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li><a href="#">Beauty</a> </li>
                                <li><a href="#">Sport & tourisim</a></li>
                                <li><a href="#">Meat & Seafood</a></li>
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </nav>
                </div>
            </div>
            <!-- Mobile Vertical Menu Start End -->
        </header>
        <!-- Main Header Area End Here -->