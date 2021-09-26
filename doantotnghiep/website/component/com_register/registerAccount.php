<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<style>
.error-text{
  color: #721c24;
  padding: 8px 10px;
  text-align: center;
  border-radius: 5px;
  background: #f8d7da;
  border: 1px solid #f5c6cb;
  margin-bottom: 10px;
  display: none;
}
</style>
<div class="register-account ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="register-title">
                    <h3 class="mb-10">ĐĂNG KÝ TÀI KHOẢN</h3>
                    <p class="mb-10">Nếu bạn đã có tài khoản với chúng tôi, vui lòng đăng nhập tại trang đăng nhập.</p>
                </div>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12 signup">
                <form class="form-register" method="POST" >
                <div class="error-text"></div>
                    <fieldset>
                        <legend>Thông tin cá nhân của bạn</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="getname"><span class="require">*</span>Tên đăng nhập</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                <p style="color:red;" id="name"> <p>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="getname"><span class="require">*</span>Tên</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="getname" name="firstname" placeholder="Tên">
                                <p style="color:red;" id="name"> <p>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="getname"><span class="require">*</span>Họ</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="getname2" name="lastname" placeholder="Họ">
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="mail"><span class="require">*</span>Địa chỉ Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="mail" name="email" placeholder="Nhập địa chỉ email của bạn vào đây..">
                                <p style="color:red;" id="err"><?php echo $error["email"] ?><p>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number"><span class="require">*</span>Số điện thoại</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control " id="mobile" name="phone" placeholder="Số điện thoại">
                                <p style="color:red;" id="mobile1"><?php echo $error["phone"] ?> <p>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number"><span class="require">*</span>Ngày sinh</label>
                            <div class="col-md-10">
                            <input class="form-control"  name="date" placeholder="MM/DD/YYYY" type="text" autocomplete="off">
                                <p style="color:red;" id="mobile1"><?php echo $error["phone"] ?> <p>
                            </div>
                        </div>
                    </fieldset>


                    <fieldset>
                        <legend>Mật khẩu của bạn</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pass1"><span class="require">*</span>Mật khẩu:</label>
                            <div class="col-md-10 field">
                                <input type="password" name="password1" class="form-control" id="pass1"  placeholder="Mật khẩu" data-parsley-minlength="6" data-parsley-maxlength="12" required>
                                <i class="fas fa-eye"></i>
                                <p style="color:red;" id="password"> <p>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pass2"><span class="require">*</span>Xác nhận mật khẩu</label>
                            <div class="col-md-10 field">
                                <input type="password" name="password2" class="form-control" id="pass2" placeholder="Xác nhận mật khẩu" data-parsley-minlength="6" data-parsley-maxlength="12" required>
                                <i class="fas fa-eye"></i>
                                <p style="color:red;" id="repassword"> <p>
                            </div>
                        </div>
                    </fieldset>
                    
                    <div class="terms">
                        <div class="float-md-right button">
                            
                        <div class="field button">
                            <input type="submit" name="submit" value="Đăng ký">
                            </div>     
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
<script src="../js/javascriptwb/pass-show-hide.js"></script>
<script src="../js/javascriptwb/signup1.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>