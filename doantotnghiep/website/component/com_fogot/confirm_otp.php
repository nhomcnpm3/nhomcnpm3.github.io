<style>

#clockdiv{
	display: inline-block;
	font-size: 12px;
}

#clockdiv > div{
	display: inline-block;
}

#clockdiv div > span{
	display: inline-block;
}
</style>
<form action="../DB/db_confirm_otp.php" class="password-forgot clearfix" method="post">
                    <fieldset>
                        <legend>Thông tin cá nhân của bạn</legend>
                        <div class="form-group d-md-flex">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>Xác nhận mã OTP</label>
                            <div class="col-md-10">
                                <input type="text" class="" name="otp" id="" placeholder="">
                                <div id="clockdiv">
                                    <span style="font-size:12px;">Không nhận được mã OPT?</span>
                                        <div>
                                            <span class="minutes"></span>:
                                        </div>
                                        <div>
                                            <span class="seconds"></span>
                                        </div>
                                        <div>
                                        <span><a style="color:blue ;display:none" href="../DB/db_replay_otp.php" id="rep" >Gửi lại</a> </span>
                                        </div>
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
                <script>

function getTimeRemaining(endtime) {
var t = Date.parse(endtime) - Date.parse(new Date());
var seconds = Math.floor((t / 1000) % 60);
var minutes = Math.floor((t / 1000 / 60) % 60);
return {
  'total': t,
  'minutes': minutes,
  'seconds': seconds
};
}


function initializeClock(id, endtime) {
var clock = document.getElementById(id);
var minutesSpan = clock.querySelector('.minutes');
var secondsSpan = clock.querySelector('.seconds');

function updateClock() {
  var t = getTimeRemaining(endtime);

  minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
  secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

  if (t.total <= 0) {
    clearInterval(timeinterval);
    document.getElementById("rep").style.display = 'block';
  }
}

updateClock();
var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) +  10 * 1000);
initializeClock('clockdiv', deadline);
</script>