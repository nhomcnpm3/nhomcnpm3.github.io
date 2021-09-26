
<!-- Register Account Start -->
<?php 
    $checkregister = isset($_GET['status']) ? $_GET['status'] : '';
    if($checkregister==0){
        $error["phone"]="A number phone already exists";
    }
    elseif($checkregister==1){
        $error["email"]="An email already exists";
    }
    elseif($checkregister==2){
        $error["phone"]="A number phone already exists";
        $error["email"]="An email already exists";
    }
    ?>
<div class="register-account ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-title">
                            <h3 class="mb-10">REGISTER ACCOUNT</h3>
                            <p class="mb-10">If you already have an account with us, please login at the login page.</p>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-register" action="../DB/db_register.php" onsubmit="return(kiemtra());" >
                            <fieldset>
                                <legend>Your Personal Details</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="getname"><span class="require">*</span>First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="getname" name="firstname" placeholder="First Name">
                                        <p style="color:red;" id="name"> <p>
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="getname"><span class="require">*</span>Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="getname2" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="address"><span class="require">*</span>Adress</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="address" name="diachi" placeholder="Adress">
                                        <p style="color:red;" id="addres"> <p>
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="mail"><span class="require">*</span>Enter you email address here...</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="mail" name="email" placeholder="Enter you email address here...">
                                        <p style="color:red;" id="err"><?php echo $error["email"] ?><p>
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control " id="mobile" name="phone" placeholder="Telephone">
                                        <p style="color:red;" id="mobile1"><?php echo $error["phone"] ?> <p>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pass1"><span class="require">*</span>Password:</label>
                                    <div class="col-md-10 field">
                                        <i>1</i>
                                        <input type="password" name="password" class="form-control" id="pass1" name="pass" placeholder="Password" data-parsley-minlength="6" data-parsley-maxlength="12" required>
                                        <i class="fas fa-eye"></i>

                                        <p style="color:red;" id="password"> <p>
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pass2"><span class="require">*</span>Confirm Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" id="pass2" placeholder="Confirm password">
                                        <p style="color:red;" id="repassword"> <p>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <div class="terms">
                                <div class="float-md-right">
                                    
                                    <input  type="submit" value="Continue"   aname="insert_account"  class="return-customer-btn checkmobile">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->
        <script src="../js/javascriptwb/signup.js"></script>
        <script src="../js/javascriptwb/pass-show-hide.js"></script>
