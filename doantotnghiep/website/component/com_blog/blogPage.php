<?php 
    $blog =array(
        array(
            "tieude"=>"At wisi enim ad minim veniam.",
            "img1"=>$level.img_blog_path."1.jpg",
            "by"=>"By Truemart",
            "slogan"=>"Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...",
            "date"=>"28",
            "month"=>"June"
        ),
        array(
            "tieude"=>"At wisi enim ad minim veniam.",
            "img1"=>$level.img_blog_path."2.jpg",
            "by"=>"By Truemart",
            "slogan"=>"Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...",
            "date"=>"28",
            "month"=>"June"
        ),
        array(
            "tieude"=>"At wisi enim ad minim veniam.",
            "img1"=>$level.img_blog_path."10.jpg",
            "by"=>"By Truemart",
            "slogan"=>"Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...",
            "date"=>"28",
            "month"=>"June"
        ),
        array(
            "tieude"=>"At wisi enim ad minim veniam.",
            "img1"=>$level.img_blog_path."1.jpg",
            "by"=>"By Truemart",
            "slogan"=>"Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...",
            "date"=>"28",
            "month"=>"June"
        )
    )
?>
<!-- Blog Page Start Here -->
<div class="blog ptb-100  ptb-sm-60">
            <div class="container">
                <div class="main-blog">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <?php
                            foreach($blog as $value)      
                            {
                        ?>                  
                        <div class="col-lg-6 col-sm-12">
                           <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="single-blog.php"><img src="<?php echo $value ["img1"]?>" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="single-blog.php"><?php echo $value ["tieude"]?></a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#"><?php echo $value ["by"]?></a></li>
                                    </ul>
                                    <p><?php echo $value ["slogan"]?></p>
                                    <a class="readmore" href="single-blog.php">Read More</a>
                               </div>
                               <div class="blog-date">
                                    <span><?php echo $value ["date"]?></span>
                                    <?php echo $value ["month"]?>
                                </div>                           
                           </div>                           
                        </div>
                        <!-- Single Blog End -->
                        <?php
                                }
                        ?>
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="pro-pagination">
                                    <ul class="blog-pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>                                    
                                    <div class="product-pagination">
                                        <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                                    </div>
                                </div>
                                <!-- Product Pagination Info -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Blog Page End Here -->