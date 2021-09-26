<!-- Cart Main Area Start -->
<?php 
    $total1 = 0;
?>
<div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Form Start -->
                        <form action="cart.php" method="post">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($_SESSION['cart'] as $value)
                                        {
                                            $idsps=$value['idsp'];
                                            $max=DP::run_query("SELECT soluong from SANPHAM where MASP='$idsps'",[],2);
                                         ?>
                                        <tr>
                                            <form action="cart.php" method="post">
                                                <?php $total=$value['soluong']*$value['gia']?>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="<?php echo $level.img_product_path.$value["img1"];?>" alt="cart-image"></a>
                                                </td>
                                                <td class="product-name"><a href="#"><?php echo $value["tensp"]?></a></td>
                                                <td class="product-price"><span class="amount">$<?php echo $value["gia"]?></span></td>
                                                <td class="product-quantity"><input type="number" name="<?php echo $idsps?>" value="<?php echo $value["soluong"]?>" min="0" max="<?php echo $max[0][0]?>"></br> <p style="<?php if($max[0][0]==1){?>color:red;"> The product is only 1<?php }else{ ?>color:gray;"> product only <?php echo $max[0][0]?><?php } ?></p> </td>
                                                <td class="product-subtotal">$<?php echo $total?></td>
                                                <td class="product-remove"> <a href="cart.php?idsps=<?php echo $idsps?>"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <?php $total1 += $total ?>
                                       <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                            <input type="submit" name="update" value="Update Cart">
                                        </form>
                                        <a href="../index.php">Continue Shopping</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Cart Totals</h2>
                                        <br>
                                        <table class="float-md-right">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">$<?php echo $total1?></span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        
                                                        <strong><span class="amount">$<?php echo $total1?></span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="../page/checkout.php">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->