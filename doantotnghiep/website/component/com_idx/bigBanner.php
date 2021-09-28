       <!-- Big Banner Start Here -->

        <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
            <div class="container banner-2">
                <?php                     
                    $count=0;
                    foreach($banner as $value)
                    { $count+=1?>
                    
                    <div class="banner-box">
                        <div class="col-img">
                            <a href="#"><img src="<?php echo $level.img_banner_path.$value["url"];?>" alt="banner 3"></a>
                        </div>
                        <?php if($count%2!=0){?>
                        <div class="col-img">
                            <a href="#"><img src="<?php echo $level.img_banner_path.$value["url"];?>" alt="banner 3"></a>
                        </div>
                        <?php } ?>
                    </div>
                <?php }?>
            </div>
            <!-- Container End -->
        </div>
        <!-- Big Banner End Here -->