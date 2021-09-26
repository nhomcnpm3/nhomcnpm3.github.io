<!-- LogIn Page Start -->
<?php 
    $checkaccount = isset($_GET['status']) ? $_GET['status'] : '';
    if($checkaccount==1){
        $error = "Your Username or Password is incorrect, please try again";
    }
    elseif($checkaccount==0) {
        $error="Account is locked";
    }
?>
<div class="log-in ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-6">
                        <div class="well mb-sm-30">
                            <div class="new-customer">
                                <h3 class="custom-title">new customer</h3>
                                <p class="mtb-10"><strong>Register</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                                <a class="customer-btn" href="register.php">continue</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10 custom-title">returning customer</h3>
                                <p class="mb-10"><strong>I am a returning customer</strong></p>
                                <form action="../DB/db_login.php" method="">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="pass" placeholder="Password" id="input-password" class="form-control">
                                    </div>
                                    <p style="color:red;"><?php echo $error ?><p>
                                    <p class="lost-password"><a href="forgot-password.php">Forgot password?</a></p>
                                    <input type="submit" value="Login" class="return-customer-btn">
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