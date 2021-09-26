 <!-- Search box -->
 

        <nav class="nav-left">          
          <ul>
          <li><a href="<?php if($SanPham||$ncc||$KH||$HD||$update_SanPham||$update_nhacungcap){?> ../index.php <?php } ?>" <?php if($index) { ?> class="active" <?php } ?>><i class="fa fa-home fa-fw"></i>Home page</a></li>
            <li><a href= "<?php if($index){?> page/QuanlySanPham.php <?php }else{ ?> QuanlySanPham.php <?php }?>"<?php if($SanPham) { ?> class="active" <?php } ?>> <i class="fa fa-users fa-fw"></i>Product Management</a></li>
            <li><a href= "<?php if($index){?> page/QuanLyNhaCungCap.php <?php }else{ ?> QuanLyNhaCungCap.php<?php } ?>"<?php if($ncc) { ?> class="active" <?php } ?>> <i class="fa fa-users fa-fw"></i>Supplier management</a></li>
            <li><a href= "<?php if($index){?> page/QuanLyKH.php <?php }else{ ?> QuanLyKH.php<?php } ?>"<?php if($KH) { ?> class="active" <?php } ?>> <i class="fa fa-users fa-fw"></i>Customer management</a></li>
            <li><a href= "<?php if($index){?> page/QuanLyHD.php <?php }else{ ?> QuanLyHD.php<?php } ?>"<?php if($HD) { ?> class="active" <?php } ?>> <i class="fa fa-users fa-fw"></i>Invoice Management</a></li>
            <li><a href="<?php if($index){?> function/logout.php <?php }else{ ?> ../function/logout.php<?php } ?> "><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>