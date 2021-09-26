<!-- LogIn Page Start -->
<?php unset($_SESSION['fogot']);unset($_SESSION['phone']);unset($_SESSION['otp'])?>
<div class="log-in ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-6">
                        <div class="well mb-sm-30">
                            <div class="new-customer">
                                <h3 class="custom-title">Khách hàng mới</h3>
                                <p class="mtb-10"><strong>Đăng ký</strong></p>
                                <p>Bằng cách tạo tài khoản, bạn sẽ có thể mua sắm nhanh hơn, cập nhật trạng thái đơn hàng và theo dõi các đơn hàng bạn đã thực hiện trước đó</p>
                                <a class="customer-btn" href="register.php">Tiếp tục</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer login">
                                <h3 class="mb-10 custom-title">Đăng nhập tài khoản</h3>
                                <form  method="POST">
                                <div class="error-text"></div>
                                    <div class="form-group">
                                        <br>
                                        <label>Tên đăng nhập</label>
                                        <input type="text" name="email" placeholder="Nhập thông tin tài khoản..." id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group field">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="pass" placeholder="Mật khẩu" id="input-password" class="form-control">
                                        <i class="fas fa-eye" style="margin:10px 0px"></i>
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.php">Quên mật khẩu?</a></p>
                                    <div class="field button">
                                    <input type="submit" value="Đăng nhập" class="return-customer-btn">
                                    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
        <script src="../js/javascriptwb/pass-show-hide.js"></script>
        <script src="../js/javascriptwb/login.js"></script>
