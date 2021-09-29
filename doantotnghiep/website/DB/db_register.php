<?php
    include_once "../libr/connectDB.php";
  $phone        = isset($_POST['phone']) ? $_POST['phone'] : '';
  $fname         = isset($_POST['firstname']) ? $_POST['firstname']: '';
  $lname         = isset($_POST['lastname']) ? $_POST['lastname']: '';
  $username         = isset($_POST['username']) ? $_POST['username'] : '';
  $date         = isset($_POST['date']) ? $_POST['date'] : '';
  $email         = isset($_POST['email']) ? $_POST['email'] : '';  
  $pass1         = isset($_POST['password1']) ? $_POST['password1'] : '';
  $pass2        = isset($_POST['password2']) ? $_POST['password2'] : '';
  $ran_id = rand(time(), 100000000);
  date_default_timezone_set('Asia/Ho_Chi_Minh');
    $today = date("y/m/d H:i:s");
  if($pass1 != $pass2){
    echo"mật khẩu không trùng khớp";
  }else{
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass1) && !empty($pass2) && !empty($date) && !empty($username)&& !empty($phone)){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          $checkemail=DP::run_query("SELECT Uni_acc from account where email='$email'",[],2);
          $checkphone=DP::run_query("SELECT Uni_acc from account where phone='$phone'",[],2);
          if($checkemail[0][0]!='' || $checkphone[0][0]!=''){
              echo "$email hoặc $phone. Đã tồn tại!";
          }
          else{
             $encrypt_pass = md5($pass1);
              $insert_account = DP::run_query("INSERT INTO account (Uni_acc, user_name, token, password, status,regis_time,Lname, Fname, url_img, coin, phone,email,birthofdate,dark_light)
              VALUES ({$ran_id}, '{$username}','123', '{$encrypt_pass}',1,'{$today}','{$lname}', '{$fname}','123', '100',{$phone},'{$email}', '{$date}',1)",[],1);
              setcookie("id", $ran_id, time() + 3600, "/");
              echo "success";
          }
        }else{
            echo"Email không đúng định dạng";
          }
        }
          else{
            echo " nhập đầy đủ thông tin";
          }
}
       
    ?>