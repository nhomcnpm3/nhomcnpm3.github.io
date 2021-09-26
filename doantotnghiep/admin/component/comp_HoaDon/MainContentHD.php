
<?php
 if (!empty($_POST['update_status']))
 {   
  
  $status=isset($_POST['Status'])?$_POST['Status']:"";
  $ID=isset($_POST['MAHD'])?$_POST['MAHD']:"";
  echo "UPDATE HOADONBAN SET TINHTRANG = '$status' where MAHD = '$ID'";
  DP::run_query(" UPDATE HOADONBAN SET TINHTRANG = '$status' where MAHD = '$ID'",[],1); 
var_dump($ID);
header("location: QuanLyHD.php");
 }
 
  $sreachid = isset($_POST['srch-term']) ? $_POST['srch-term'] : ''; 
  $HD1=DP::run_query(" SELECT * FROM HOADONBAN WHERE MAHD like '$sreachid' or MAHD like '$sreachid' or NGAYLAPHD like '$sreachid' or diachi like '$sreachid' or mazip like '$sreachid' or tenkh like '$sreachid' or tinhtrang like '$sreachid'",[],2); 
?>
<!-- Main content --> 
<div class="content" style="flex:1;background-color: #efefef;">

        <div class="content-top-container">
          <div class="row">
            <nav class="content-top col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a  class="active"onclick="openNav1()"></a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="content-container">
          <div class="introduce">
          <div id="myNav1" class="overlay1">
    
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
      </div>
    </div>
  </div>
             <div class=" panel-default table-responsive">
              <table class="table  table-bordered headtitle">       <!-- table-bordered:viền tb --> 
                <thead>
                  <tr>
                    <td><a href="" class="headcolor">ID invoice<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">invoice date <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Unit price<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Number phone<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">address <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">ZIP code <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Customer name<span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Email <span class="caret"></span></a></td>
                    <td><a href="" class="headcolor">Status<span class="caret"></span></a></td>

                    
                  </tr>
                </thead>
                <tbody>
                
                <?php if($sreachid=="")
                  {?>
                <?php
                  foreach($allHD as $value)
                  {
                ?>
                  <tr>
                    <td><?php echo $value["MAHD"]?></td>
                    <td><?php echo $value["NGAYLAPHD"]?></td>
                    <td><?php echo $value["DONGIA"]?></td>
                    <td><?php echo $value["SDTKH"]?></td>
                    <td><?php echo $value["diachi"]?></td>
                    <td><?php echo $value["mazip"]?></td>
                    <td><?php echo $value["tenkh"]?></td>
                    <td><?php echo $value["email"]?></td>
                    <form method="post">
                    <td>
                    <?php $mahd=$value["MAHD"];  $status1=DP::run_query(" SELECT tinhtrang from HOADONBAN where MAHD='$mahd'",[],2);?>
                    <select name="Status" id="">
                              <?php if($status1[0][0]=="confirm"){?>
                              <option value="confirm">Confirm</option>
                              <option value="delivering">Delivering</option>
                              <option value="Cancel">Cancel</option>
                              <?php }elseif($status1[0][0]=="delivering"){ ?>
                              <option value="delivering">Delivering</option>
                              <option value="confirm">Confirm</option>
                              <option value="Cancel">Cancel</option>
                              <?php }else{ ?>}
                              <option value="Cancel">Cancel</option>
                              <option value="delivering">Delivering</option>
                              <option value="confirm">Confirm</option>
                              <?php }?>
                            </select>  
                            <input type="hidden" name="MAHD" value="<?php echo $value['MAHD']?>">
                            <input type="submit" name="update_status" value="Submit"/>  
                      </form> 
                  </tr>
                <?php
                  }
                ?>   
                <?php }else{ ?>
                  <?php
                  foreach($HD1 as $value)
                  {
                ?>
                  <tr>
                    <td><?php echo $value["MAHD"]?></td>
                    <td><?php echo $value["NGAYLAPHD"]?></td>
                    <td><?php echo $value["DONGIA"]?></td>
                    <td><?php echo $value["SOLUONG"]?></td>
                    <td><?php echo $value["MANV"]?></td>
                    <td><?php echo $value["SDTKH"]?></td>
                    <td><?php echo $value["diachi"]?></td>
                    <td><?php echo $value["mazip"]?></td>
                    <td><?php echo $value["tenkh"]?></td>
                    <td><?php echo $value["IDKH"]?></td>
                    <td><?php echo $value["email"]?></td>
                    <td>
                    <form method="post">
                    
                    <?php $mahd=$value["MAHD"];  $status1=DP::run_query(" SELECT * from HOADONBAN where MAHD='$mahd'",[],2);?>
                    <select name="Status" id="">
                              <?php if($status1[0][0]=="confirm"){?>
                              <option value="confirm">Confirm</option>
                              <option value="delivering">Delivering</option>
                              <option value="Cancel">Cancel</option>
                              <?php }elseif($status1[0][0]=="delivering"){ ?>
                              <option value="delivering">Delivering</option>
                              <option value="confirm">Confirm</option>
                              <option value="Cancel">Cancel</option>
                              <?php }else{ ?>}
                              <option value="Cancel">Cancel</option>
                              <option value="delivering">Delivering</option>
                              <option value="confirm">Confirm</option>
                              <?php }?>
                            </select>  
                            <input type="hidden" name="MAHD" value="<?php echo $value['MAHD']?>">
                            <input type="submit" name="update_status" value="Submit"/>  
                      </form>
                  </td>
                    
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