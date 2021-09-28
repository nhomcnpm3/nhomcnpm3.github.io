<div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>hot deals</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                <?php $count=0;
                    foreach($hotdeal as $value){
                    ?>
                        <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["name_product"];?></a></h4>
                                <p><span class="price">$<?php echo $value["sale"];?></span><del class="prev-price">$<?php echo $value["price"]?></del></p>
                                <div class="label-product l_sale"><?php echo $value["sale"];?><span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['ID_pro']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
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
                    <?php 
                    $count++;
                    if($count==6){break;}
                    }
                ?>
                                        </div>

            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->