  <!-- Arrivals Products Area Start Here -->
  <?php 

?>
 <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>New Arrivals</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#fshion">Thời trang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Làm đẹp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Điện tử </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sport">Thể thao</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#household">Gia dụng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#food">Thực phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#toys">Đồ chơi</a>
                            </li>
                            
                            <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sationery">Văn phòng phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#learnningtools">Dụng cụ học tập </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#medical">Y tế </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#agriculture">Nông nghiệp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#vehicle">Phương tiện</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#accessory">Phụ kiện</a>
                            </li>                -->

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                    <div id="fshion" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here --1-- -->
                            <div class="best-seller-pro-active owl-carousel">
                            <?php $count=0;
                                foreach($fashion_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">                                        
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
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
                                        if($count==5){break;}
                                        }
                                    ?>
                                
                                    <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="toys" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <?php $count=0;
                                foreach($toys_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php echo $level.page_path."product.php"?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
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
                                        if($count==5){break;}
                                        }
                                    ?>


                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <?php $count=0;
                                foreach($beautify_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                            <a href="<?php echo $level.page_path."product.php"?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php echo $level.page_path."product.php"?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
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
                                        if($count==5){break;}
                                        }
                                    ?>

                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                
                                <?php $count=0;
                                foreach($electronic_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['ID_pro']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
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
                                        if($count==5){break;}
                                        }
                                    ?>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                        <div id="sport" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                
                                <?php $count=0;
                                foreach($sport_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['ID_pro']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
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
                                        if($count==5){break;}
                                        }
                                    ?>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #sport End Here -->
                        <div id="household" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                
                                <?php $count=0;
                                foreach($household_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['ID_pro']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
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
                                        if($count==5){break;}
                                        }
                                    ?>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #household End Here -->
                        <div id="food" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                
                                <?php $count=0;
                                foreach($food_type as $value)
                                {
                                ?>
                                <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                        <a href= "<?php if($id!='') { ?><?php echo $level."page/product.php?idsp=$value[ID_pro]"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>">
                                                <img class="primary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                                <img class="secondary-img" src="<?php echo $level.img_product_path.$value["img"];?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="<?php if($id!='') { ?><?php echo $level."page/product.php"?> <?php  } else { ?> <?php echo $level."page/login.php"?> <?php } ?>"><?php echo $value["name_product"];?></a></h4>
                                                <p><span class="price">$<?php echo $value["sale"];?></span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                <form method="post" <?php if($id!='') { ?> action="page/cart.php?idsp=<?php echo $value['ID_pro']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
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
                                        if($count==5){break;}
                                        }
                                    ?>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #food End Here -->
                        
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->