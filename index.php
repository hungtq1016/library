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
  
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
  <script>
    $(document).ready(function () {
    $('#booksTable').DataTable();
  });
  </script>
  </html>