<!-- Register Account Start -->
<?php
session_start();
$otp=$_SESSION['otp'];
 echo"ma otp: $otp";
?>
<div class="Lost-pass ptb-100 ptb-sm-60">
            <div class="container">
                <div class="register-title">
                    <h3 class="mb-10 custom-title">Quên mật khẩu</h3>
                    <p class="mb-10">Nếu bạn đã có tài khoản với chúng tôi, vui lòng đăng nhập tại trang đăng nhập.</p>
                </div>
                <?php 
                    if(isset($_SESSION['fogot'])){
                        if($_SESSION['fogot']=='0'){
                         include "inf_user.php";
                        }
                        elseif($_SESSION['fogot']=='1'){
                         include "confirm_otp.php";
                        }else{
                            include "new_pass.php";
                        }
                    }else{
                     include "inf_user.php";
                    }
                ?>
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->
        
