<!-- Left column -->
<div class="mobile-menu-icon">
      <a href="javascript:void(0)" class="closebtn4" onclick="openmobile()"> <i class="fa fa-bars"></i></a>
  </div>
    <div class="flex">
        <div id="cls" class="closem">
          <div class="closem-content">
            <button onclick="closemobile()" style="width:100%;height:100%;background-color:rgba(0, 0, 0, 0);border: none"></button>
        </div>
        </div>
        
        <div id="opmb" class="mobile">
          <div class="mobile-content">
  
            <nav id="nav-menu-container1" >
  
              <ul class="nav-menu" style="font-size: 30px;">
                <li><a href="index.php"><i class="fa fa-home fa-fw"></i>trang chủ</a></li>
                <li><a href="<?php echo $level.page_comp."QuanlySanPham.php"?>"> <i class="fa fa-users fa-fw"></i>Quản lý sản phẩm</a></li>
                <li><a href=""><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
              </ul>
            </nav>
        </div>
      </div>
      <div class="menu">
        <header class="logo">
          <div class="square">
            <img src="<?php echo $level.img_path."tu1 - Chaien.png"?>"style="width:40px;height:40px;" alt="">
          </div>
          <h1>Admin panel</h1>
        </header>