<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="<?php echo $level."index.php"?>">Home</a></li>
                       
                         <?php
                            if($err404_layout==true)
                            {
                        ?>
                            <li class="active"><a href="404.php">404</a></li>
                        <?php
                        }
                        ?>
                             <?php
                            if($about_layout==true)
                            {
                        ?>
                            <li class="active"><a href="about.php">about</a></li>
                            <?php
                        }
                        ?> 
                            <?php
                            if($blog_layout==true)
                            {
                        ?>
                            <li class="active"><a href="blog.php">blog</a></li>
                            <?php
                        }
                        ?> 
                            <?php
                            if($cart_layout==true)
                            {
                        ?>
                            <li class="active"><a href="cart.php">cart</a></li>
                            <?php
                            }
                            ?> 
                            <?php
                            if($compare_layout==true)
                            {
                        ?>
                            <li class="active"><a href="compare.php">compare</a></li>
                            <?php
                        }
                        ?> 
                            <?php
                            if($contact_layout==true)
                            {
                        ?>
                            <li class="active"><a href="contact.php">contact</a></li>
                            <?php
                            }
                            ?> 
                            <?php
                            if($fogot_layout==true)
                            {
                        ?>
                            <li class="active"><a href="forgot-password.php">forgot-password</a></li>
                            <?php
                        }
                        ?> 
                            <?php
                            if($login_layout==true)
                            {
                        ?>
                            <li class="active"><a href="login.php">login</a></li>
                            <?php
                        }
                        ?> 
                            <?php
                            if($product_layout==true)
                            {   $masp = isset($_GET['idsp']) ? $_GET['idsp'] : '';
                        ?>
                            <li class="active"><a href="product.php?idsp=<?php echo $masp?>">product</a></li>
                            <?php
                        }
                        ?> 
                            <?php
                            if($register_layout==true)
                            {
                        ?>
                            <li class="active"><a href="register.php">register</a></li>
                            <?php
                        }
                        ?>
                             <?php
                            if($shop_layout==true)
                            {
                        ?>
                            <li class="active"><a href="shop.php">shop</a></li>
                            <?php
                        }
                        ?>
                             <?php
                            if($single_blog_layout==true)
                            {
                        ?>
                            <li class="active"><a href="single-blog.php">single-blog</a></li>
                            <?php
                        }
                        ?> 
                            <?php 
                            if($wishlist_layout==true)
                            {
                        ?>
                            <li class="active"><a href="wishlist.php">wishlist</a></li>
                            <?php 
                        } 
                        ?>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->