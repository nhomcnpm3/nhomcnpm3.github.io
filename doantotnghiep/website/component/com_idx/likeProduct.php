

<!-- Like Products Area Start Here -->
<div class="like-product ptb-95 off-white-bg pt-sm-50 pb-sm-55 ">
            <div class="container">
                <div class="like-product-area"> 
                    <h2 class="section-ttitle2 mb-30">You May Like </h2>
                    <!-- Arrivals Product Activation Start Here -->
                    <div class="like-pro-active owl-carousel">
                        <!-- Double Product Start -->
                        <?php
                        foreach($youlike  as $value)
                        {
                        ?>
                            <!-- Single Product Start -->
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
                                        <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["tieude"]?></a></h4>
                                        <p><span class="price"><?php echo $value["GIASI1"]?></span><del class="prev-price"><?php echo $value["GIASI2"]?></del></p>
                                        <div class="label-product l_sale"><?php echo $value["sale"]?><span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                        <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['MASP']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
                                        <input style="width:100%;height:30px"type="submit"  name="addcart" value="+ Add To Cart"/>

                                    </form>                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            
                        <?php
                        }
                        ?>                     
                    </div>
                    <!-- Arrivals Product Activation End Here -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Lile Products Area End Here -->