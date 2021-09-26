<!-- Shop Page Start -->
<?php include $level."DB/db_sreach.php";
?>
<div class="main-shop-page pt-100 pb-100 ptb-sm-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar">
                            <!-- Sidebar Electronics Categorie Start -->
                            <div class="electronics mb-40">
                                <h3 class="sidebar-title">Electronics</h3>
                                <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                                    <ul>
                                        <li class="has-sub"><a href="#">Camera</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Cords and Cables</a></li>
                                                <li><a href="shop.php">gps accessories</a></li>
                                                <li><a href="shop.php">Microphones</a></li>
                                                <li><a href="shop.php">Wireless Transmitters</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">gamepad</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">cube lifestyle hd</a></li>
                                                <li><a href="shop.php">gopro hero4</a></li>
                                                <li><a href="shop.php">bhandycam cx405ags</a></li>
                                                <li><a href="shop.php">vixia hf r600</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Digital Cameras</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Gold eye</a></li>
                                                <li><a href="shop.php">Questek</a></li>
                                                <li><a href="shop.php">Snm</a></li>
                                                <li><a href="shop.php">vantech</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Virtual Reality</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.php">Samsung</a></li>
                                                <li><a href="shop.php">Toshiba</a></li>
                                                <li><a href="shop.php">Transcend</a></li>
                                                <li><a href="shop.php">Sandisk</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                    </ul>
                                </div>
                                <!-- category-menu-end -->
                            </div>
                            <!-- Sidebar Electronics Categorie End -->
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-40">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="sidbar-style">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly="">
                                </form>
                            </div>
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-40">
                                <h3 class="sidebar-title">categories</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="camera" type="checkbox">
                                        <label class="form-check-label" for="camera">Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">GamePad (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-40">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-40">
                                <h3 class="sidebar-title">color</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">white (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Orange (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Blue (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Yellow (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Product Top Start -->
                            <div class="top-new mb-40">
                                <h3 class="sidebar-title">Top New</h3>
                                <div class="side-product-active owl-carousel">
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."20.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."19.jpg"?>" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$130.45</span><del class="prev-price">180.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."2.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."1.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."3.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."4.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Proin Work Lamp Silver </a></h4>
                                                <p><span class="price">$150.45</span><del class="prev-price">$200.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."25.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."26.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."41.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."42.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$80.45</span><del class="prev-price">$100.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."36.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."35.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."33.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."34.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Lamp Proin Work  Silver </a></h4>
                                                <p><span class="price">$120.45</span><del class="prev-price">130.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."31.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."32.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$140.45</span><del class="prev-price">$150.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."15.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."16.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Lamp Work Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."17.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."18.jpg"?>" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."23.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."24.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Proin Work Lamp Silver </a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="<?php echo $level.img_product_path."25.jpg"?>" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo $level.img_product_path."26.jpg"?>" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                </div>
                            </div>
                            <!-- Product Top End -->                            
                            <!-- Single Banner Start -->
                            <div class="col-img">
                                <a href="shop.php"><img src="img\banner\banner-sidebar.jpg" alt="slider-banner"></a>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Sort By:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Relevance</option>
                                        <option value="Product Name">Neme, A to Z</option>
                                        <option value="Product Name">Neme, Z to A</option>
                                        <option value="Price">Price low to heigh</option>
                                        <option value="Price" selected="">Price heigh to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Show:</label>
                                    <select class="sorter wide">
                                        <option value="12">12</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>


                        <!-- Grid & List View End -->
                        <div class="main-categorie mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row">
                                    <?php foreach($search1 as $value){ ?>
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[MASP]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                        <img class="primary-img" src="<?php echo $level.img_product_path.$value["img1"]?>" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img2"]?>" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php"><?php echo $value["tieude"]?></a></h4>
                                                        <p><span class="price">$<?php echo $value["GIASI2"]?></span><del class="prev-price">$<?php echo $value["GIASI1"]?></del></p>
                                                        <div class="label-product l_sale"><?php echo $value["sale"]?><span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                        <form method="post" <?php if($id!='') { ?> action="cart.php?idsp=<?php echo $value['MASP']; ?>" <?php  } else { ?> action="login.php" <?php } ?>>
                                                            <input style="width:100%;height:30px"type="submit"  name="addcart" value="+ Add To Cart"/>

                                                        </form>        
                                                        </div>                                              
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <?php }?>
                                        
                                       
                               
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->