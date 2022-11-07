<!doctype html>
<?php 
  include_once 'src/Model/Book_M.php';
  include_once 'src/Model/Category_M.php';
  include_once 'src/Model/Author_M.php';
  include_once 'src/Model/Log_M.php';
  include_once 'src/Model/LoginLog_M.php';
  include_once 'src/Model/Loan_M.php';

?>
<html lang="en">
  <?php include_once('src/View/Inc/header.php');?>
  <body  class=" layout-fluid">
    <script src="public/assets/dist/js/demo-theme.min.js?1667333929"></script>
    <div class="page">
      <!-- Sidebar -->
      <?php 
        if(isset($_COOKIE['user'])){
          include_once('src/View/Inc/aside.php');
        }
        
        include_once('routes.php');
      ?>
    </div>
  </body>
</html>