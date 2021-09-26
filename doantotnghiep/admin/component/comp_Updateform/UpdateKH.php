

<!-- Main content --> 
<div class="content" style="flex:1;background-color: #efefef;">

        <div class="content-top-container">
          <div class="row">
            <nav class="content-top col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a href="../page/QuanlyKH.php" class="active">Khách Hàng</a></li>
              </ul>  
            </nav> 
          </div>

        </div>
        <div class="content-container">

          <div class="introduce">
           
              <h1>Cập nhật Khách Hàng</h1>
                <a href="../page/QuanlyKH.php">Trở về</a> <br/> <br/>
                <?php 
                foreach($update_ncc as $values)
                {?>
                 <form method="post">
                    <table width="80%" border="1" cellspacing="0" cellpadding="10" class="table" >
                        <tr >
                            <td>Số Điện Thoại</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="sdt" value="<?php echo $values["sdt"] ?>"/>
                                
                                <?php if (!empty($errors['tenncc'])) echo $errors['tenncc']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Tên Khách Hàng</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="sdt" value="<?php echo $values["TenKH"] ?>"/>
                                <?php if (!empty($errors['sdt'])) echo $errors['sdt']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Địa chỉ</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="dchi" value="<?php echo $values["DCHI"] ?>"/>
                                
                                <?php if (!empty($errors['diachi'])) echo $errors['diachi']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>email</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="email" value="<?php echo $values["email"] ?>"/>
                                
                                <?php if (!empty($errors['sotk'])) echo $errors['sotk']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>pass</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="pass" value="<?php echo $values["pass"] ?>"/>
                                
                                <?php if (!empty($errors['tentk'])) echo $errors['tentk']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>IDKH</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="idkh" value="<?php echo $values["IDKH"] ?>"/>
                                
                                <?php if (!empty($errors['tennh'])) echo $errors['tennh']; ?>
                            </td>
                        </tr>
                        <tr>
                       
                        </tr>
                        <tr>
                        <tr>
                        <td>Tình Trạng</td>
                            <td>
                            <select name="action" id="sdt">
                              <?php if($values["TINHTRANG"])
                              {
                                ?>
                              <option value="Enable">Enable</option>
                              <option value="Disable">Disable</option>
                              <?php }else{ ?>
                                <option value="Disable">Disable</option>
                                <option value="Enable">Enable</option>
                              <?php } ?>
                            </select>               
                            </td>
                        </tr>
                        <tr>

                            <td></td>
                            <td>
                                <input type="hidden" name="idKH" value="<?php  echo $values['IDKH']; ?>"/>
                                <input type="submit" name="edit_KH" value="Lưu"/>
                            </td>
                        </tr>
            </table>
                 </form>
                 <?php } ?>                       
          </div>          
         
        
          <div class="pagination-wrap">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-play"></i></span>
                </a>
              </li>
            </ul>
          </div>          
          <footer class="text-right">
            <p>Copyright &copy; Tú Vũ Lộc </p>
          </footer>         
        </div>
      </div>
    </div>