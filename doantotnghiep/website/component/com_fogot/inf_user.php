<form action="../DB/db_forgotpass.php" class="password-forgot clearfix" method="post">
                    <fieldset>
                        <legend>Thông tin cá nhân của bạn</legend>
                        <div class="form-group d-md-flex">
                            <label class="control-label col-md-2" for="phone"><span class="require">*</span>Số điện thoại</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại tại đây...">
                                <p style="color:red"><?php echo $_SESSION['error']?></p>
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-left float-sm-left">
                            <a class="customer-btn mr-20" href="login.php">Quay lại</a>
                        </div>
                        <div class="float-right float-sm-right">
                            <input type="submit" name="enterforgot" value="Tiếp tục" class="return-customer-btn">
                        </div>
                    </div>
                </form>
                <?php unset($_SESSION['error'])?>