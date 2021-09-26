<!-- Cart Main Area Start -->
<div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-sm-3" style="float:left;border-right:1px solid #e5e5e5;">
                            <ul>
                                <li style="padding:10px 40px;"><a href="#" class="active"style="text-decorations:none; color:#E62E0B;"><i class="fa fa-home fa-fw"></i>Personal information</a></li>
                                <li style="padding:10px 40px;"><a href="profile.php"style="text-decorations:none; color:inherit;"><i class="fa fa-sliders fa-fw"></i>Purchase form</a></li>
                                <li style="padding:10px 40px;"><a href="Quanlynhansu.html"style="text-decorations:none; color:inherit;"><i class="fa fa-users fa-fw"></i>Notification</a></li>
                                <li style="padding:10px 40px;"><a  style="text-decorations:none; color:inherit;" onclick="window.location = '../page/login.php?id='"><i class="fa fa-users fa-fw"></i>Logout</a></li>
                                
                                
                            </ul>  
                      </div>
                    <div class="col-sm-9" style="float:left;">
                        <!-- Form Start -->
                        <form action="../DB/db_updateuser.php" method="post">
                        <div class="col-sm-12" style="background-color:;">
                            <div class="col-sm-11" style="border-bottom:solid 1px #e5e5e5;">
                                <h3>Profile</h3>
                                <p>Manage profile information for account security</p>
                            </div>
                            </br>
                            <div class="col-sm-11" style="border-bottom:solid 1px #e5e5e5;">
                                <div class="col-sm-12">
                                    <p style="float:left;display:inline-block;">user name</p>
                                    <input style="padding:3px 60px 3px 10px;margin-left:41px;" name="username" value="<?php echo $khachhang[0]['TENKH']?>"/>
                                </div>
                                </br>
                                <div class="col-sm-12">
                                    <p style="float:left;display:inline-block;">Password</p>
                                    <input style="padding:3px 60px 3px 10px;margin-left:50px;" name="repass" type="password" value="<?php echo $khachhang[0]['pass']?>" />
                                </div>
                                </br>
                                <div class="col-sm-12">
                                    <p style="float:left;display:inline-block;">Email</p>
                                    <p style="padding:3px 60px;margin-left:50px;"><?php echo $khachhang[0]['EMAIL']?></p>
                                </div>
                                </br>
                                <div class="col-sm-12">
                                    <p style="float:left;display:inline-block;">Phone</p>
                                    <p style="padding:3px 60px;margin-left:50px;"><?php echo $khachhang[0]['SDT']?></p>
                                </div>
                                </br>
                                
                                <input type="submit"style="background-color:#E62E0B;padding:10px 15px;margin-left:11px;  border: none;border-radius:2px;color:white;"value="Update"/>
                                </br></br>
                            </div>
                            </form>
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->