<!doctype html>
<html lang="en">
  <?php 
    include_once 'src/View/Inc/header.php'
  ?>
  <body  class=" layout-fluid">
    <div class="page">
      <?php 
        if(isset($_COOKIE["user"])) {
          include_once 'src/View/Inc/aside.php';
        }   
      ?>
      <div class="page-wrapper">
        <?php include_once 'src/Controllers/Routing.php'?>
        <?php include_once 'src/View/Inc/footer.php'?>
      </div>
    </div>
    <script src="src/assets/dist/js/tabler.min.js" ></script>
  </body>
  <script src="src/assets/js/index.js"></script>
</html>