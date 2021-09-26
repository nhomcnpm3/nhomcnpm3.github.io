<!-- Product Thumbnail Start -->
<?php 
   include $level."DB/db_product.php";
    if(!empty($_POST["submit"]))
    {
    $name        = isset($_POST['name']) ? $_POST['name'] : '';
    $Summary         = isset($_POST['Summary']) ? $_POST['Summary']: '';
    $Review         = isset($_POST['Review']) ? $_POST['Review']: '';
    $test=DP::run_query("SELECT count(id) from binhluan ",[],2);
    $idbl=$test[0][0]+1;
    $today = date("y/m/d H:i:s");
    DP::run_query("INSERT INTO binhluan VALUES('$idbl','$id','$masp','$name','$Summary','$Review',0,'$today',NULL)",[],1);
    }
    if(!empty($_POST["delete"]))
    {
    $idbl = isset($_POST['idbl']) ? $_POST['idbl'] : '';
    DP::run_query("UPDATE binhluan set tinhtrang=0 where id=$idbl",[],1);
    }
    if(!empty($_POST["rep"]))
    {
    $test=DP::run_query("SELECT count(id) from binhluan ",[],2);
    $idbl=$test[0][0]+1;
    $today = date("y/m/d H:i:s");
    $inf = isset($_POST['inf']) ? $_POST['inf'] : '';
    $idrep = isset($_POST['idbl']) ? $_POST['idbl'] : '';
    $today = date("y/m/d H:i:s");
    DP::run_query("INSERT INTO binhluan VALUES('$idbl','$id','$masp','Admin',NULL,'$inf',1,'$today','$idrep')",[],1);
    }
    
    $review=DP::run_query("SELECT * FROM binhluan inner join KHACHHANG on binhluan.IDKH=KHACHHANG.IDKH where binhluan.tinhtrang=1 and IDSP='$masp' and REP_ID is NULL",[],2);
    $countreview=DP::run_query("SELECT count(ID) FROM binhluan  where tinhtrang=1 and IDSP='$masp'",[],2);
?>
<div class="main-product-thumbnail ptb-100 ptb-sm-60">
            <div class="container">
                <div class="thumb-bg">
                    <div class="row">
                        <!-- Main Thumbnail Image Start -->
                        <div class="col-lg-5 mb-all-40">
                            <!-- Thumbnail Large Image start -->
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <a data-fancybox="images" href="<?php echo $level.img_product_path."35.jpg"?>"><img src="<?php echo $level.img_product_path.$get_product[0]["img1"]?>" alt="product-view"></a>
                                </div>
                                
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="product-thumbnail mt-15">
                                <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                    <a class="active" data-toggle="tab" href="#thumb1"?><img src="<?php echo $level.img_product_path.$get_product[0]["img1"]?>" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb2"?><img src="<?php echo $level.img_product_path.$get_product[0]["img2"]?>" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb3"?><img src="<?php echo $level.img_product_path."15.jpg"?>" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb4"?><img src="<?php echo $level.img_product_path."4.jpg"?>" alt="product-thumbnail"></a>
                                    <a data-toggle="tab" href="#thumb5"?><img src="<?php echo $level.img_product_path."5.jpg"?>" alt="product-thumbnail"></a>
                                </div>
                            </div>
                            <!-- Thumbnail image end -->
                        </div>
                        <!-- Main Thumbnail Image End -->
                        <!-- Thumbnail Description Start -->
                        <div class="col-lg-7">
                            <div class="thubnail-desc fix">
                                <h3 class="product-header"><?php echo $get_product[0]["tieude"]?></h3>
                                <div class="rating-summary fix mtb-10">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-feedback">
                                        <a href="#">(<?php echo $countreview[0][0] ?> review)</a>
                                        <a href="#">add to your review</a>
                                    </div>
                                </div>
                                <div class="pro-price mtb-30">
                                    <p class="d-flex align-items-center"><span class="prev-price">$<?php echo $get_product[0]["GIASI1"]?></span><span class="price"><?php echo $get_product[0]["GIASI2"]?></span><span class="saving-price">sale <?php echo $get_product[0]["sale"]?></span></p>
                                </div>
                                <p class="mb-20 pro-desc-details"><?php echo $get_product[0]["MOTA"]?></p>
                                <div class="product-size mb-20 clearfix">
                                    <label>Size</label>
                                    <select class="">
                                      <option>S</option>
                                      <option>M</option>
                                      <option>L</option>
                                    </select>
                                </div>
                                <div class="color clearfix mb-20">
                                    <label>color</label>
                                    <ul class="color-list">
                                        <li>
                                            <a class="orange active" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="paste" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-quantity d-flex hot-product2">
                                    <form method="post" <?php if($id!='') { ?> action="cart.php?idsp=<?php echo $get_product[0]['MASP']; ?>" <?php  } else { ?> action="page/login.php" <?php } ?>>
                                        <input class="quantity mr-15" name="quantity"  type="number" min="1" value="1">
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                        <input style="width:100%;height:30px"type="submit" style="background-color:red;padding 5px 10px;" name="addcart" value="+ Add To Cart"/>

                                    </form>  
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.php" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.php" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-ref mt-20">
                                    <p><span class="in-stock"><i class="ion-checkmark-round"></i> IN STOCK</span></p>
                                </div>
                                <div class="socila-sharing mt-25">
                                    <ul class="d-flex">
                                        <li>share</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Description End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-100 pb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc nav tabs-area" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#dtail">Product Details</a></li>
                            <li><a data-toggle="tab" href="#review">Reviews <?php echo $countreview[0][0]?></a></li>
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content border-default">
                            <div id="dtail" class="tab-pane fade show active">
                                <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <!-- Reviews Start -->
                                <div class="review border-default universal-padding">
                                    <div class="group-title">
                                        <h2>customer review</h2>
                                    </div>
                                    <h4 class="review-mini-title">Truemart</h4>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Truemart</label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Review by <a href="https://themeforest.net/user/hastech">Truemart</a></label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Posted on 7/20/18</label>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                </div>
                                <!-- Reviews End -->
                                <!-- Reviews Start -->
                                <div class="review border-default universal-padding mt-30">
                                    <h2 class="review-title mb-30">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                    <p class="review-mini-title">your rating</p>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                    <!-- Reviews Field Start -->
                                    <div class="riview-field mt-40">
                                        <form autocomplete="off" action="" method="post">
                                            <div class="form-group">
                                                <label class="req" for="sure-name">Nickname</label>
                                                <input type="text" class="form-control" name="name" id="sure-name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="subject">Summary</label>
                                                <input type="text" class="form-control" name="Summary" id="subject" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="comments">Review</label>
                                                <textarea class="form-control" rows="5" name="Review" id="comments" required="required"></textarea>
                                            </div>
                                            <input type="submit" name="submit" class="customer-btn" value="Submit Review">
                                        </form>
                                    </div>
                                    <!-- Reviews Field Start -->
                                    
                                </div>
                                <!-- Reviews End -->
                                <div class="review border-default universal-padding mt-30">
                                    <?php foreach($review as $value){ ?>
                                    <form action="" method="post">
                                    <h2 class="review-title mb-30" style="font-size:13px;">Email: <?php echo $value["EMAIL"]?> <br> <span>Username: <?php echo $value["Nickname"]?> </span><br> <span><?php echo $value["thoigian"]?> </span><p><?php echo $value["Summary"]?></p><p><?php echo $value["Review"]?></p></br> </br>
                                        <?php $idblsp=$value["ID"];    $repreview=DP::run_query("SELECT * FROM binhluan where binhluan.tinhtrang=1 and REP_ID='$idblsp'",[],2); ?>
                                        <?php foreach($repreview as $rep){ ?>
                                        <span style="font-size:13px;margin-left:20px;">Email: Admin 
                                        <br>
                                         <span style="margin-left:20px;">Username: Admin </span>
                                         <br> 
                                         <span style="margin-left:20px;"><?php echo $rep["thoigian"]?> </span>
                                         <br/>
                                         <span style="margin-left:20px;"><?php echo $rep["Review"]?></span>
                                         </span> </br> </br>
                                        <?php }?>
                                        <br>
                                       <?php if($id==1){?> 
                                        <input type="text" style="border:solid 1px gray;border-radius:5px 0 0 5px; width:200px;" name="inf"/>
                                        <input type="submit" name="rep" value="submit" style="background-color:#e62e04;color:white;border:solid 1px gray;border-radius:0 5px 5px 0;margin-left:-5px"/>
                                        <input type="hidden" name="idbl" value="<?php echo $value["ID"]?>"/>
                                        <input type="submit" name="delete" value="delete" style="border:solid 1px gray;"/>
                                        <?php } ?>
                                    </h2>
                                    </form>
                                    <?php } ?>
                                </div>  
                            </div>
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Realted Products Start Here -->
        <div class="hot-deal-products off-white-bg pt-100 pb-90 pt-sm-60 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>Realted Products</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                <?php 
                    foreach($realtedproduct as $value){?>
                        <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="<?php echo $value["img1"]?>" alt="single-product">
                                <img class="secondary-img" src="<?php echo $value["img2"]?>" alt="single-product">
                            </a>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php"><?php echo $value["tieude"]?></a></h4>
                                <p><span class="price"><?php echo $value["priceNew"]?></span></p>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <?php }?>
                    <!-- Single Product Start -->
                    
                    <!-- Single Product End -->
                </div>                
                <!-- Hot Deal Product Active End -->

            </div>
            <!-- Container End -->
        </div>
        <!-- Realated Products End Here -->