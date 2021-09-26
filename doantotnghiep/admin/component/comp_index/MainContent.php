<!-- Main content --> 
<?php 
include "libr/products.php";

    $idbl= isset($_POST['idbl']) ? $_POST['idbl'] :'';
    if(!empty($_POST["delete"])){
      DP::run_query("DELETE from binhluan where id='$idbl'",[],1); 
    }
    if(!empty($_POST["submit"])){
      DP::run_query("UPDATE binhluan set tinhtrang=1 where id='$idbl'",[],1);
    }
    $review=DP::run_query("SELECT * FROM binhluan inner join KHACHHANG on binhluan.IDKH=KHACHHANG.IDKH where binhluan.tinhtrang=0 ",[],2);
?>
<div class="content" style="flex:1;background-color: #efefef;">
        <div class="content-top-container">
          <div class="row">
            <nav class="content-top col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a href="../website">sales website</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="content-container">
          <div class="flex ">
           
            <div class="introduce white-bg  text-center ">
              <img src= <?php echo $level.img_path."person.jpg"?> style="width:120px;height:120px;border-radius:50%;margin-bottom: 30px;" alt="Bicycle">
              <h2  style="color: #39ADB4;margin-bottom: 5px;text-transform:uppercase">TrueMart</h2>
              <h3  style="margin-bottom: 70px;text-transform:uppercase">Managing Director</h3>
              <div class="icon-container">
                <div class="icon-content">
                  <i class="fa fa-facebook icon"></i>  
                </div>
                <div class="icon-content">
                  <i class="fa fa-twitter icon"></i>  
                </div>
                <div class="icon-content">
                  <i class="fa fa-google-plus icon"></i>  
                </div>                
              </div>
            </div>
            <div class= "img introduce" style="background-color: white;position: relative;flex:1">
              <img src= <?php echo $level.img_path."sunset-big.jpg"?> alt="Sunset" class=" contentimg">
              <i class="fa fa-heart"></i>          
            </div>
          </div>
          <div class="flex " >
    
              <div class="panel-default introduce ">
                <div class="panel-heading ">
                  <h2 >infomation review for user</h2>
                </div>
                  <table class="table  table-bordered">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>mail</td>
                        <td>Nickname</td>
                        <td>Summary</td>
                        <td>Review</td>
                        <td>Action</td>
                        <td>Delete</td>

                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($review as $value){?>
                    <form action="" method="post">
                      <tr>
                        <td><?php echo $value['ID']?></td>
                        <td><?php echo $value['EMAIL']?></td>
                        <td><?php echo $value['Nickname']?></td>
                        <td><?php echo $value['Summary']?></td>
                        <td><?php echo $value['Review']?></td>
                        <td><input type="submit" name="submit" value="confirm"/>
                        <td><input type="submit" name="delete" value="delete"/>
                      </tr>
                      <td><input type="hidden" name="idbl" value="<?php echo $value['ID']?>"/>
                      </form>
                      <?php } ?>
                                  
                    </tbody>
                  </table>    
              </div>          
          </div>
       </div> 
     </div>
    </div>

  </body>