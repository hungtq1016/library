<?php 
  include_once 'src/Model/Book_M.php';
  include_once 'src/Model/Category_M.php';
  include_once 'src/Model/Author_M.php';
  include_once 'src/Model/Log_M.php';
  include_once 'src/Model/LoginLog_M.php';
  include_once 'src/Model/Loan_M.php';
  $req = explode("/", $_SERVER['REQUEST_URI'])[1];
    if ($req == 'admin') {
?>
<!doctype html>
<html lang="en">
    <?php include_once('src/View/admin/Inc/header.php');?>
  <body  class=" layout-fluid">
    <script src="public/assets/dist/js/demo-theme.min.js?1667333929"></script>
    <div class="page">
      <!-- Sidebar -->

      <?php 
        if(isset($_COOKIE['user'])){
          include_once('src/View/admin/Inc/aside.php');
        }
        
        include_once 'routes.php';
      ?>
    </div>
  </body>
</html>
<?php    
  }
  // Neu khong phai trang admin thi se tu dong tai trang client
?>
<!DOCTYPE html>
<html>
<?php include_once 'src/View/client/inc/header.php';?>
<body>
    <?php include_once 'src/View/client/inc/nav.php';?>
    <div class="container" role="main" style="margin-top: 0">
    <?php include_once 'routes.php'?>
    </div>
</body>

</html>