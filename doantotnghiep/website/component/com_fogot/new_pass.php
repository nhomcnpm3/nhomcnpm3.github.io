<form action="../DB/db_new_pass.php" class="password-forgot clearfix" method="post">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group d-md-flex" style="padding-bottom: 10px;">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>New Password:</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control"  name="pass1" id="" placeholder="Password">
                            </div>
                           
                        </div>
                        <div class="form-group d-md-flex">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>Confirm Password:</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="pass2" id="" placeholder="Confirm Password">
                                <p style="color:red"><?php echo $_SESSION['error']?></p>
                            </div>
                           
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-left float-sm-left">
                            <a class="customer-btn mr-20" href="login.php">Back</a>
                        </div>
                        <div class="float-right float-sm-right">
                            <input type="submit" name="enterpass" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
                <?php unset($_SESSION['error'])?>