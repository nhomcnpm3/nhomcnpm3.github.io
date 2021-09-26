<!-- Register Account Start -->
<?php
session_start();
$idk=isset($_SESSION["idkh"]) ? $_SESSION["idkh"] : '';
 if (!empty($_POST['enterforgot']))
 {     
    include "../libr/product.php";
    $email=isset($_POST['email']) ? $_POST['email'] : ''; 
    $idkh=DP::run_query("SELECT * from KHACHHANG where EMAIL='$email'",[],2);
    $idk=$idkh[0]["IDKH"];
    $_SESSION["email"]=$email;
    $_SESSION["idkh"]=$idk;
    //$errors = array();
    if (empty($email)){
        $errors = 'Enter your email address';
    }
    if ($email!="" && empty($idk)){
        $errors = 'Account does not exist';
    }
 }
   if (!empty($_POST['enterpass']))
 {     
    include "../libr/product.php";
    $pass=isset($_POST['pass1']) ? $_POST['pass1'] : '';
    $pass2=isset($_POST['pass2']) ? $_POST['pass2'] : '';  
    if ($pass!=$pass2){
        $errors = 'Passwords are not the same';
    }
    if(!$errors){
        DP::run_query("UPDATE KHACHHANG set pass='$pass2' where IDKH='$idk'",[],1);
        $_SESSION["idkh"]="-1";
        $_SESSION["pass2"]=$pass2;
    }
    
 }
 
?>
<div class="Lost-pass ptb-100 ptb-sm-60">
            <div class="container">
                <div class="register-title">
                    <h3 class="mb-10 custom-title">register account</h3>
                    <p class="mb-10">If you already have an account with us, please login at the login page.</p>
                </div>
                <?php if($idk=="")
                {?>
                <form class="password-forgot clearfix" method="post">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group d-md-flex">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter you email address here...">
                                <?php if (!empty($errors)) echo '<p style="color:red">'.$errors.'</p>' ?>
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-left float-sm-left">
                            <a class="customer-btn mr-20" href="login.php">Back</a>
                        </div>
                        <div class="float-right float-sm-right">
                            <input type="submit" name="enterforgot" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
                <?php }elseif($_SESSION["idkh"] != "-1"){ ?>
                    <form class="password-forgot clearfix" method="post">
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
                                <?php if (!empty($errors)) echo '<p style="color:red">'.$errors.'</p>' ?>
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
                <?php }else{ unset($_SESSION["idkh"]);?>
                    <form class="password-forgot clearfix" action ="../DB/db_login.php">
                    <fieldset>
                        <legend>Change password successfully</legend>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-left float-sm-left">
                            <a class="customer-btn mr-20" href="login.php">Back</a>
                        </div>
                        <div class="float-right float-sm-right">
                            <input onclick="window.location ='../DB/db_login.php?email=<?php echo $_SESSION['email']; ?>&pass=<?php echo $_SESSION['pass2'];?>'"type="button" name="enterpass" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
                <?php }?>
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->
