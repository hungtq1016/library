<?php 
    include_once '../Model/Book_M.php';
    include_once '../Model/Log_M.php';

    $book = new Book_M();
    $log = new Log_M();
    $user = json_decode(base64_decode($_COOKIE['user']) , true);

      $action = $_GET['action'];
      $id = $_GET['id'];
      switch ($action):
        case"get":
            $result = $book->readStatement("WHERE book_name LIKE '%".$id."%' LIMIT 8");
            while($set = $result->fetch()):
              echo "<div><a href='/sach/".$set['book_id']."'>".$set['book_name']."</a></div>";
            endwhile;
        break;
      endswitch;
?>