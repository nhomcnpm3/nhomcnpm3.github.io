
<?php
 if (!empty($_POST['insert_product']))
 {   
  $masp         = isset($_POST['masp']) ? $_POST['masp'] : '';
  //$kiemtrama=DP::run_query("SELECT MASP FROM SANPHAM WHERE MASP=$masp",[],2);; 
  
  $ncc    = isset($_POST['ncc']) ? $_POST['ncc'] : '';
  $kho    = isset($_POST['kho']) ? $_POST['kho'] : '';
  $maloai    = isset($_POST['loaisp']) ? $_POST['loaisp'] : '';  
  $tieude    = isset($_POST['name']) ? $_POST['name'] : '';
  $mota= isset($_POST['mota']) ? $_POST['mota'] : 'NULL';
  $gianhap     = isset($_POST['gianhap']) ? $_POST['gianhap'] : '';
  $giasi1   = isset($_POST['giasi1']) ? $_POST['giasi1'] : '';
  $giasi2   = isset($_POST['giasi2']) ? $_POST['giasi2'] : '';
  $img1     = isset($_POST['img1']) ? $_POST['img1'] : '';
  $img2     = isset($_POST['img2']) ? $_POST['img2'] : '';
  $soluong     = isset($_POST['soluong']) ? $_POST['soluong'] : '';
  $mausac     = isset($_POST['mausac']) ? $_POST['mausac'] : '';
  $kichthuoc     = isset($_POST['kichthuoc']) ? $_POST['kichthuoc'] : '';
  $sale= isset($_POST['sale']) ? $_POST['sale'] : '';
  $tinhtrang=isset($_POST['action']) ? $_POST['action'] : ''; 
  //$temp=count_ctsp(); 
  $temp=DP::run_query("SELECT count(MACHITIETSP) FROM CHITIETSP",[],2);;  
  $mactsp='CTSP'.$temp[0][0]+1;
  if($tinhtrang=="Enable"){
    $tinhtrang=1;
  }
  
  else{
    $tinhtrang=0;

  }

  $errors = array();
  if (empty($tieude)){
      $errors['tieude'] = 'Chưa nhập  Name product!';
  }
   
  if (empty($gianhap)){
      $errors['gianhap'] = 'Chưa nhập giá';
  }
  if (empty($giasi1)){
    $errors['giasi1'] = 'Chưa nhập giá sỉ 1!';
}
 
if (empty($giasi2)){
    $errors['giasi2'] = 'Chưa nhập giá sỉ 2';
}
if (empty($sale)){
  $errors['sale'] = 'Chưa nhập sale!';
}

if (empty($gianhap)){
  $errors['gianhap'] = 'Chưa nhập giá';
}
if (!$errors){
  DP::run_query("INSERT INTO SANPHAM VALUES ('$masp','$tieude','$mota','$gianhap',$sale,$giasi1,$giasi2,$tinhtrang,'$maloai','$ncc','$kho','$img1 ','$img2',$soluong)",[],1);
  
}
if(!$errors){
  DP::run_query("INSERT INTO CHITIETSP VALUES ('$mactsp','$masp','$kichthuoc','$mausac',$soluong)",[],1);
}
header("location: QuanlySanPham.php");
 }
 
  $sreachid  = isset($_POST['srch-term']) ? $_POST['srch-term'] : ''; 
  $product1= DP::run_query("SELECT * FROM SANPHAM WHERE MASP='$sreachid'",[],2);
?>
<!-- Main content --> 
<div class="content" style="flex:1;background-color: #efefef;">

        <div class="content-top-container">
          <div class="row">
            <nav class="content-top col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a  class="active"onclick="openNav1()">More products</a></li>
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
                        <td>Product Type</td>
                            <td>
                            <select name="loaisp" id="cars">
                              <?php foreach($allloaisp as $values)
                              {                            
                                ?>
                              <option value="<?php echo $values['MALOAISP']?>"><?php echo $values['TENLOAISP']?></option>
                              <?php } ?>
                            </select>               
                            </td>
                        
                        </tr>
                            <tr >
                        <td>Supplier</td>
                            <td>
                            <select name="ncc" id="">
                              <?php foreach($allncc as $values)
                              {                            
                                ?>
                              <option value="<?php echo $values['MANCC']?>"><?php echo $values['TENNCC']?></option>
                              <?php } ?>
                            </select>               
                            </td>
                            </tr>
                            <tr>
                            <td>Depot</td>
                            <td>
                            <select name="kho" id="">
                              <?php foreach($allkho as $values)
                              {                            
                                ?>
                              <option value="<?php echo $values['MAKHO']?>"><?php echo $values['TENKHO']?></option>
                              <?php } ?>
                            </select>               
                            </td>
                            </tr>
                            <tr>
                            <td> ID product</td>
                            <td>
                              <?php foreach($masp_max as $values)
                              {
                                 ?>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="masp" value="<?php echo $values['MASP']+"1" ?>"/>
                                <?php }  ?>
                                <?php if (!empty($errors['tieude'])) echo $errors['tieude']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td> Name product</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="name" value=""/>
                                
                                <?php if (!empty($errors['tieude'])) echo $errors['tieude']; ?>
                            </td>
                        </tr>
                        
                            <tr>
                            <td>Size</td>
                            <td>
                            <select name="kichthuoc" id="">
                              <?php foreach($getallkichthuoc as $values)
                              {                            
                                ?>
                              <option value="<?php echo $values['MAKICHTHUOC']?>"><?php echo $values['MAKICHTHUOC']?></option>
                              <?php } ?>
                            </select>               
                            </td>
                            </tr>

                            <tr>
                            <td>Color</td>
                            <td>
                              <?php foreach($getallmau as $values)
                              {                            
                                ?>
                              <input style="float:left;margin-right:4px;" type="radio" name="mausac" value="<?php echo $values['MAMAU']?>"><div style="float:left;margin:4px 6px;width:20px;height:15px;border:solid 1px black;background-color:<?php echo $values['MAMAU']?>"> </div> 
                              <?php } ?>
                            </td>
                            </tr>
                        <tr>
                        <td>Quantity</td>
                            <td>
                                <input type="number" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="soluong" value=""/>
                                
                                <?php if (!empty($errors['soluong'])) echo $errors['soluong']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>describe</td>
                            <td>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="mota" value=""/>
                            </td>
                        </tr>
                        <tr>
                        <td>import price</td>
                            <td>
                                <input type="number" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="gianhap" value=""/>
                                
                                <?php if (!empty($errors['gianhap'])) echo $errors['gianhap']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>wholesale price 1</td>
                            <td>
                                <input type="number" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="giasi1" value=""/>
                                
                                <?php if (!empty($errors['giasi1'])) echo $errors['giasi1']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>wholesale price 2</td>
                            <td>
                                <input type="number" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="giasi2" value=""/>
                                
                                <?php if (!empty($errors['giasi2'])) echo $errors['giasi2']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Sale</td>
                            <td>
                                <input type="number" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="sale" value=""/>
                                
                                <?php if (!empty($errors['sale'])) echo $errors['sale']; ?>
                            </td>
                        </tr>
                        <tr>
                        <td>Image</td>
                            <td>
                                <img src="<?php echo $level.temp_product_path.$values['img1']?>">
                                <form action="/upload.php" method="post" enctype="multipart/form-data">
                                  <input type="file" name="img1" id="fileupload">
                                </form>                      
                            </td>
                        </tr>
                        <tr>
                        <td>Image</td>
                            <td>
                                <form action="/upload.php" method="post" enctype="multipart/form-data">
                                  <input type="file" name="img2" id="fileupload">
                                </form>                      
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
                                <input type="submit" name="insert_product" value="Lưu"/>
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

  <div id="myNav2" class="overlay1">
    <div class="overlay-content1" style="background-color:white;">
      <div style="margin:0 70px;">
      <a href="javascript:void(0)" class="closebtn1" onclick="closeNav2()">&times;</a>
      <form method="post">
                    <table width="80%" border="1" cellspacing="0" cellpadding="10" class="table" >
                            <tr>
                            <td> ID product</td>
                            <td>
                              <?php foreach($masp_max as $values)
                              {
                                 ?>
                                <input type="text" style="width:80%;height:32px;border:solid 1px #b1b1b1;" name="masp" value="<?php echo $values['MASP']+"1" ?>"/>
                                <?php }  ?>
                                <?php if (!empty($errors['tieude'])) echo $errors['tieude']; ?>
                            </td>
                        </tr>                        
                            <tr>
                            <td>Size</td>
                            <td>
                            <select name="kichthuoc" id="">
                              <?php foreach($getallkichthuoc as $values)
                              {                            
                                ?>
                              <option value="<?php echo $values['MAKICHTHUOC']?>"><?php echo $values['MAKICHTHUOC']?></option>
                              <?php } ?>
                            </select>               
                            </td>
                            </tr>

                            <tr>
                            <td>Color</td>
                            <td>
                              <?php foreach($getallmau as $values)
                              {                            
                                ?>
                              <input style="float:left;margin-right:4px;" type="radio" name="mausac" value="<?php echo $values['MAMAU']?>"><div style="float:left;margin:4px 6px;width:20px;height:15px;border:solid 1px black;background-color:<?php echo $values['MAMAU']?>"> </div> 
                              <?php } ?>
                            </td>
                            </tr>
                        <tr>
                        <td>Quantity</td>
                            <td>
                                <input type="number" style="width:80%;height:32px;border:solid 1px #b1b1b1;"name="soluong" value=""/>
                                
                                <?php if (!empty($errors['soluong'])) echo $errors['soluong']; ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="insert_product" value="Lưu"/>
                            </td>
                        </tr>
            </table>
                 </form>
                 </div>
    </div>
  </div>


            <div class=" panel-default table-responsive">
              <table class="table  table-bordered headtitle">       <!-- table-bordered:viền tb --> 
                <thead>
                  <tr>
                    <td><a href="" class="headcolor">ID product<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Name produce <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">describe<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Entry price <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">wholesale price<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Quantity <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">image <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                <?php if($sreachid=="")
                  {?>
                <?php
                  foreach($DSSP as $value)
                  {
                ?>
                  <tr>
                    <td><?php echo $value["MASP"]?></td>
                    <td><?php echo $value["tieude"]?></td>
                    <td><?php echo $value["MOTA"]?></td>
                    <td><?php echo $value["GIANHAP"]?></td>
                    <td><?php echo $value["GIASI1"]?></td>
                    <td><?php echo $value["SOLUONG"]?></td>
                    <td><img src='<?php echo $level.img_path."products/".$value["img1"]?>' style="width:40px;height:40px;" alt=""></td>
                    <td>
                    <form method="post" action="../function/deletesanpham.php?id=<?php echo $value['MASP']; ?>">
                        <input onclick="window.location = '../function/updatesanpham.php?id=<?php echo $value['MASP']; ?>'" type="button" value="Sửa"/>                
                        <input type="submit"  name="delete" value="xoá"/>

                      </form>
                      <button onclick="openNav2()"  name="insert" >Update</button>
                  </td>
                    <td><?php if($value["TINHTRANG"]) {?> <a href="" class="action">Enable</a> <?php }else {?><a href="" class="action">Disable</a><?php } ?> </td>
                  </tr>
                <?php
                  }
                ?>   
                <?php }else{ ?>
                  <?php
                  foreach($product1 as $value)
                  {
                ?>
                  <tr>
                    <td><?php echo $value["MASP"]?></td>
                    <td><?php echo $value["tieude"]?></td>
                    <td><?php echo $value["MOTA"]?></td>
                    <td><?php echo $value["GIANHAP"]?></td>
                    <td><?php echo $value["GIASI1"]?></td>
                    <td><?php echo $value["GIASI2"]?></td>
                    <td><?php echo $value["SOLUONG"]?></td>
                    <td>
                    <form method="post" action="../function/deletesanpham.php?id=<?php echo $value['MASP']; ?>">
                        <input onclick="window.location = '../function/updatesanpham.php?id=<?php echo $value['MASP']; ?>'" type="button" value="Sửa"/>                
                        <input type="submit"  name="delete" value="delete"/>
                        <input type="button" onclick="openNav2()"  name="insert" value="Update"/>
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