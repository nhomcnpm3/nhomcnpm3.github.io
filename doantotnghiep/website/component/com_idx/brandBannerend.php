<!-- Brand Banner Area Start Here -->

<div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
            <div class="container">
                <div class="section-ttitle mb-20">
                    <h2>Best Seller</h2>
               </div>
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="<?php echo $level.img_banner_path."h1-band1.jpg"?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Brand Banner Start -->
                        <div class="brand-banner owl-carousel">
                        <?php
                            foreach($banner as $value)
                            {?>
                            <div class="single-brand">
                                <a href="#"><img class="img" src="<?php echo $level.img_brand_path.$value["url"]?>" alt="brand-image"></a>
                                <a href="#"><img src="<?php echo $level.img_brand_path.$value["url"]?>" alt="brand-image"></a>
                                <a href="#"><img src="<?php echo $level.img_brand_path.$value["url"]?>" alt="brand-image"></a>
                            </div>
                        <?php }?>
                        </div>
                        <!-- Brand Banner End -->                        

                    </div>
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="<?php echo $level.img_banner_path."h1-band2.jpg"?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <div class="big-banner pb-100 pb-sm-60">
            <div class="container big-banner-box">
                <div class="col-img">
                    <a href="#">
                    <img src="<?php echo $level.img_banner_path."5.jpg"?>" alt="">
                    </a>
                </div>
                <div class="col-img">
                    <a href="#">
                    <img src="<?php echo $level.img_banner_path."h1-banner3.jpg"?>" alt="">
                    </a>
                </div>
            </div>
            <!-- Container End -->
        </div>