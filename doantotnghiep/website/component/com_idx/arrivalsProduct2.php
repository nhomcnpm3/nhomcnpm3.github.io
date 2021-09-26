<!-- Arrivals Products Area Start Here -->

<div class="second-arrivals-product pb-45 pb-sm-5">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Best Seller</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics2">Electronics </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty2">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics2">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids2">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty2">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids2">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion2">Fashion</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here --1-- -->
                            <div class="best-seller-pro-active owl-carousel">
                            <?php $count=0;
                                foreach($fashionarriv as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img1"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img2"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["tieude"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["GIASI2"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="<?php echo $level."cart.php"?>" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="<?php echo $level."compare.php"?>" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="<?php echo $level."wishlist.php"?>" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <?php 
                                        $count++;
                                        if($count==4){break;}
                                        }
                                    ?>
                                
                                    <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <?php $count=0;
                                foreach($babykidsarriv as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[MASP]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img1"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img2"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php echo $level.page_path."product.php"?>"><?php echo $value["tieude"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["GIASI2"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="<?php echo $level."cart.php"?>" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="<?php echo $level."compare.php"?>" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="<?php echo $level."wishlist.php"?>" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <?php 
                                        $count++;
                                        if($count==4){break;}
                                        }
                                    ?>


                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <?php $count=0;
                                foreach($beautyarriv as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="<?php echo $level.page_path."product.php"?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img1"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img2"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php echo $level.page_path."product.php"?>"><?php echo $value["tieude"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["GIASI2"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="<?php echo $level."cart.php"?>" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="<?php echo $level."compare.php"?>" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="<?php echo $level."wishlist.php"?>" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <?php 
                                        $count++;
                                        if($count==4){break;}
                                        }
                                    ?>

                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics2" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                
                                <?php $count=0;
                                foreach($electronicarriv as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[MASP]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img1"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img2"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["tieude"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["GIASI2"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['MASP']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
                                                      <input style="width:100%;height:30px"type="submit"  name="addcart" value="+ Add To Cart"/>

                                                         </form>
                                                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="<?php echo $level."compare.php"?>" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="<?php echo $level."wishlist.php"?>" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <?php 
                                        $count++;
                                        if($count==4){break;}
                                        }
                                    ?>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->