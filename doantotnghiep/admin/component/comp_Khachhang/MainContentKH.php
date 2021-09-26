
  <?php


  $sreachid  = isset($_POST['srch-term']) ? $_POST['srch-term'] : ''; 
  $kh1=DP::run_query("SELECT * FROM KHACHHANG WHERE IDKH like '$sreachid' or SDT like '$sreachid' or TENKH like '$sreachid' or DCHI like '$sreachid' or EMAIL like '$sreachid' ",[],2);  
  
    
  ?>
  <!-- Main content --> 
  <div class="content" style="flex:1;background-color: #efefef;">

          <div class="content-top-container">
            <div class="row">
              <nav class="content-top col-lg-12 col-md-12">
                <ul class="text-uppercase">
                    <li href=""><a  class="active"onclick="openNav1()"></a></li>
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


              <div class=" panel-default table-responsive">
                <table class="table  table-bordered headtitle">       <!-- table-bordered:viền tb --> 
                  <thead>
                    <tr>
                      <td><a href="" class="headcolor">Number phone<span class="caret"></span></a></td>
                      <td><a href="" class="headcolor">Cutormer name<span class="caret"></span></a></td>
                      <td><a href="" class="headcolor">Address<span class="caret"></span></a></td>
                      <td><a href="" class="headcolor">Email <span class="caret"></span></a></td>
                      <td><a href="" class="headcolor">Password<span class="caret"></span></a></td>
                      <td><a href="" class="headcolor">ID<span class="caret"></span></a></td>
                      
                      <td>Edit</td>
                      
                      <td>Status</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php if($sreachid=="")
                    {?>
                  <?php
                    foreach($allKH as $value)
                    {
                  ?>
                    <tr>
                      <td><?php echo $value["SDT"]?></td>
                      <td><?php echo $value["TENKH"]?></td>
                      <td><?php echo $value["DCHI"]?></td>
                      <td><?php echo $value["EMAIL"]?></td>
                      <td><?php echo $value["pass"]?></td>
                      <td><?php echo $value["IDKH"]?></td>
                      <td>
                      <form method="post" action="../function/deletekhachhang.php?IDKH=<?php echo $value['IDKH']; ?>">
                                        
                          <input type="submit"  name="delete" value="delete"/>

                        </form>
                    </td>
                      <td><?php if($value["TinhTrang"]) {?> <a href="" class="action">Enable</a> <?php }else {?><a href="" class="action">Disable</a><?php } ?> </td>
                    </tr>
                  <?php
                    }
                    ?>     
                    <?php }else {?>
                      <?php
                      foreach($kh1 as $value)
                      {
                    ?>
                      <tr>
                      <td><?php echo $value["SDT"]?></td>
                      <td><?php echo $value["TENKH"]?></td>
                      <td><?php echo $value["DCHI"]?></td>
                      <td><?php echo $value["EMAIL"]?></td>
                      <td><?php echo $value["pass"]?></td>
                      <td><?php echo $value["IDKH"]?></td>
                      <td>
                      <form method="post" action="../function/deletekhachhang.php?IDKH=<?php echo $value['IDKH']; ?>">
                                        
                          <input type="submit"  name="delete" value="delete"/>

                        </form>
                    </td>
                      <td><?php if($value["TinhTrang"]) {?> <a href="" class="action">Enable</a> <?php }else {?><a href="" class="action">Disable</a><?php } ?> </td>
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