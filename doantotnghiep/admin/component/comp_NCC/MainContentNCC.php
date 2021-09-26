
<?php
 if (!empty($_POST['insert_ncc']))
 {   
$mancc = isset($_POST['mancc']) ? $_POST['mancc'] : '';
$tenncc= isset($_POST['tenncc']) ? $_POST['tenncc'] : '';
$sdt         = isset($_POST['sdt']) ? $_POST['sdt'] : '';
$diachi       = isset($_POST['diachi']) ? $_POST['diachi'] : '';  
$sotk        = isset($_POST['sotk']) ? $_POST['sotk'] : '';
$tentk  = isset($_POST['tentk']) ? $_POST['tentk'] : '';
$tennh   = isset($_POST['tennh']) ? $_POST['tennh'] : '';
$link = isset($_POST['link']) ? $_POST['link'] : '';
$tinhtrang=isset($_POST['action']) ? $_POST['action'] : ''; 
  if($tinhtrang=="Enable"){
    $tinhtrang=1;
  }
  else{
    $tinhtrang=0;

  }
  $errors = array();
  if (empty($tenncc)){
      $errors['tenncc'] = 'Chưa nhập nhà cung cấp';
  }
  if (empty($sdt)){
    $errors['sdt'] = 'Chưa nhập giá số điện thoại!';
}
 
if (empty($diachi)){
    $errors['diachi'] = 'Chưa nhập địa chỉ';
}
if (empty($sotk)){
  $errors['sotk'] = 'Chưa nhập số tài khoản!';
}

if (empty($tentk)){
  $errors['tentk'] = 'Chưa nhập tên tài khoản';
}
if (empty($tennh)){
  $errors['tennh'] = 'Chưa nhập tên ngân hàng!';
}

if (empty($link)){
  $errors['link'] = 'Chưa nhập link';
}
if (!$errors){
  DP::run_query("INSERT INTO NHACUNGCAP VALUES ('$mancc','$tenncc','$sdt','$diachi','$sotk','$tentk','$tennh','$link',$tinhtrang)",[],1); 
  
}
header("location: QuanLyNhaCungCap.php");
 }
 $sreachid  = isset($_POST['srch-term']) ? $_POST['srch-term'] : ''; 
 $ncc1=DP::run_query("SELECT * FROM NHACUNGCAP WHERE MANCC like '$sreachid'",[],2);  
?>
<!-- Main content --> 
<div class="content" style="flex:1;background-color: #efefef;">

        <div class="content-top-container">
          <div class="row">
            <nav class="content-top col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li href=""><a  class="active"onclick="openNav1()">More suppliers</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="content-container">
          <div class="introduce">
          <div id="myNav1" class="overlay1">
    <div class="overlay-content1" style="background-color:white;">
      <div style="margin:0 70px;">
      <a href="javascript:void(0)" class="closebtn1" onclick="closeNav1()">&times;</a>
      <form method="post">
                    <table width="80%" border="1" cellspacing="0" cellpadding="10" class="table" >
                        <tr >
                        
                            <td>ID supplier</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="mancc" value="NCC<?php echo $coutncc[0][0]+"1" ?>"/>
                                <?php if (!empty($errors['tieude'])) echo $errors['tieude']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Supplier name</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="tenncc" value=""/>
                                
                                <?php if (!empty($errors['tieude'])) echo $errors['tieude']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Number phone</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="sdt" value=""/>
                            </td>
                        </tr>
                        <tr>
                        <td>Address</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="diachi" value=""/>
                                
                                <?php if (!empty($errors['gianhap'])) echo $errors['gianhap']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Number bank</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="sotk" value=""/>
                                
                                <?php if (!empty($errors['giasi1'])) echo $errors['giasi1']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Name of bank</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="tentk" value=""/>
                                
                                <?php if (!empty($errors['giasi2'])) echo $errors['giasi2']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Name bank</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="tennh" value=""/>
                                
                                <?php if (!empty($errors['sale'])) echo $errors['sale']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Link</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="link" value=""/>
                                
                                <?php if (!empty($errors['sale'])) echo $errors['sale']; ?>
                            </td>
                        </tr>

                        <tr>
                        <td>Status</td>
                            <td>
                            <select name="action" id="cars">                            
                              <option value="Enable">Enable</option>
                              <option value="Disable">Disable</option>                            
                            </select>               
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="insert_ncc" value="Lưu"/>
                            </td>
                        </tr>
            </table>
                 </form>
                 </div>
    </div>
  </div>
  <p style="color:gray; font-size:15px; margin-left:20px;">information search</p>
  <form class="search" method="post">
          <div class="input">
              <button type="submit"  class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>


            <div class=" panel-default table-responsive">
              <table class="table  table-bordered headtitle">       <!-- table-bordered:viền tb --> 
                <thead>
                  <tr>
                    <td><a href="" class="headcolor">ID supplier<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Supplier name <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Number phone<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Address<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Number bank<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Name of bank<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">LINK<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Status <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                <?php if($sreachid=="")
                  {?>
                <?php
                  foreach($allncc as $value)
                  {
                ?>
                  <tr>
                    <td><?php echo $value["MANCC"]?></td>
                    <td><?php echo $value["TENNCC"]?></td>
                    <td><?php echo $value["SDT"]?></td>
                    <td><?php echo $value["DCHI"]?></td>
                    <td><?php echo $value["SOTK"]?></td>
                    <td><?php echo $value["TENNH"]?></td>
                    <td><?php echo $value["LINK"]?></td>
                    <td><?php echo $value["TINHTRANG"]?></td>
                    <td>
                    <form method="post" action="../function/deletencc.php?id=<?php echo $value['MANCC']; ?>">
                        <input onclick="window.location = '../function/updatencc.php?id=<?php echo $value['MANCC']; ?>'" type="button" value="Sửa"/>                
                        <input type="submit"  name="delete" value="delete"/>

                      </form>
                  </td>
                    <td><?php if($value["TINHTRANG"]) {?> <a href="" class="action">Enable</a> <?php }else {?><a href="" class="action">Disable</a><?php } ?> </td>
                  </tr>
                <?php
                  }
                ?>     
                <?php }else {?>
                  <?php
                  foreach($ncc1 as $value)
                  {
                ?>
                  <tr>
                    <td><?php echo $value["MANCC"]?></td>
                    <td><?php echo $value["TENNCC"]?></td>
                    <td><?php echo $value["SDT"]?></td>
                    <td><?php echo $value["DCHI"]?></td>
                    <td><?php echo $value["SOTK"]?></td>
                    <td><?php echo $value["TENNH"]?></td>
                    <td><?php echo $value["LINK"]?></td>
                    <td><?php echo $value["TINHTRANG"]?></td>
                    <td>
                    <form method="post" action="../function/deletesanpham.php?id=<?php echo $value['MASP']; ?>">
                        <input onclick="window.location = '../function/updatencc.php?id=<?php echo $value['MANCC']; ?>'" type="button" value="Sửa"/>                
                        <input type="submit"  name="delete" value="delete"/>

                      </form>
                  </td>
                    <td><?php if($value["TINHTRANG"]) {?> <a href="" class="action">Enable</a> <?php }else {?><a href="" class="action">Disable</a><?php } ?> </td>
                  </tr>
                <?php
                  }
                }
                ?>                  
                </tbody>
              </table>    
            </div>                          
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
            <p>Copyright &copy; Tú Huy Lộc </p>
          </footer>         
        </div>
      </div>
    </div>