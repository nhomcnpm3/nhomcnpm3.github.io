

<!-- Main content --> 
<div class="content" style="flex:1;background-color: #efefef;">

        <div class="content-top-container">
          <div class="row">
            <nav class="content-top col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a href="../page/QuanlySanPham.php" class="active">Sản phẩm</a></li>
              </ul>  
            </nav> 
          </div>

        </div>
        <div class="content-container">

          <div class="introduce">
           
              <h1>Cập nhật sản phẩm</h1>
                <a href="../page/QuanlySanPham.php">Trở về</a> <br/> <br/>
                <?php 
                foreach($update_product as $values)
                {?>
                 <form method="post">
                    <table width="80%" border="1" cellspacing="0" cellpadding="10" class="table" >
                        <tr >
                            <td>Tên Sản Phẩm</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="name" value="<?php echo $values["tieude"] ?>"/>
                                
                                <?php if (!empty($errors['tieude'])) echo $errors['tieude']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Mô tả</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="mota" value="<?php echo $values["MOTA"] ?>"/>
                            </td>
                        </tr>
                        <tr>
                        <td>Giá nhập</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="gianhap" value="<?php echo $values["GIANHAP"] ?>"/>
                                
                                <?php if (!empty($errors['gianhap'])) echo $errors['gianhap']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Giá sỉ 1</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="giasi1" value="<?php echo $values["GIASI1"] ?>"/>
                                
                                <?php if (!empty($errors['giasi1'])) echo $errors['giasi1']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Giá sỉ 2</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="giasi2" value="<?php echo $values["GIASI2"] ?>"/>
                                
                                <?php if (!empty($errors['giasi2'])) echo $errors['giasi2']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Sale</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="sale" value="<?php echo $values["sale"] ?>"/>
                                
                                <?php if (!empty($errors['sale'])) echo $errors['sale']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Đăng Ảnh 1</td>
                            <td>
                                <img style="width:50px;height:50px;"src="<?php echo $level."images/products/".$values['img1']?>">
                                <form action="/upload.php" method="post" enctype="multipart/form-data">
                                  <input type="file" name="img1" id="fileupload">
                                </form>                      
                            </td>
                        </tr>
                        
                        <tr>
                        <td>Tình Trạng</td>
                            <td>
                            <select name="action" id="cars">
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
                                <input type="hidden" name="id" value="<?php  echo $values['MASP']; ?>"/>
                                <input type="submit" name="edit_product" value="Lưu"/>
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