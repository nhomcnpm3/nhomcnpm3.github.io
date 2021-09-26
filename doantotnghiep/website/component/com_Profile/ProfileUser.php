<!-- Cart Main Area Start -->
<div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-sm-3" style="float:left;border-right:1px solid #e5e5e5;">
          <ul>
            <li style="padding:10px 40px;"><a onclick="window.location =<?php if($id!=1){?> 'pageprofile.php' <?php }else{?> '../../admin' <?php }?>" class="active"style="text-decorations:none; color:inherit;"><i class="fa fa-home fa-fw"></i><?php if($id!=1){ ?>Personal information <?php }else{ ?>Admin information <?php } ?></a></li>
            <li style="padding:10px 40px;"><a href="#"style="text-decorations:none; color:#E62E0B;"><i class="fa fa-sliders fa-fw"></i>Purchase form</a></li>
            <li style="padding:10px 40px;"><a href="Quanlynhansu.html"style="text-decorations:none; color:inherit;"><i class="fa fa-users fa-fw"></i>Notification</a></li>
            <li style="padding:10px 40px;"><a href="../DB/db_logout.php" style="text-decorations:none; color:inherit;"><i class="fa fa-users fa-fw"></i>Logout</a></li>
            
            
          </ul>  
        </div>
        <div class="col-sm-9" style="float:left;">
                        <!-- Form Start -->
                        <div class="col-sm-12" >
                         
                            </div>
                        <form action="#">
                            <!-- Table Content Start -->
                            <div >
                                <table>
                                    
                                    <tbody>
                                    <?php foreach($myhd as $value)
                                        {
                                         ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="<?php echo $level.img_product_path.$value["img1"];?>" alt="cart-image" style="width:120px;height:120px; padding:10px 0px 10px 10px;"></a>
                                            </td>
                                            <td class="product-name"style="padding:20px 50px;"><a href="#"><?php echo $value["tieude"]?></a></td>
                                            <td class="product-quantity"><span class="amount">x <?php echo $value["soluong"]?></span></td>
                                            <td class="product-subtotal"style="padding-left:50px;">$<?php echo $value["tongtien"]?></td>
                                            <td class="product-subtotal"style="color:green;padding-left:50px;"><?php echo $value["tinhtrang"]?></td>
                                        </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                           
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->