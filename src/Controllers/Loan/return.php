<?php
  include_once '../../Model/Loan_M.php';
  include_once '../../Model/Log_M.php';
  include_once '../../Model/Book_M.php';

    $id = $_GET['id'];
    $loan = new Loan_M();
    $read = $loan->read($id);
    $loan->update_return($id);
    $books = json_decode(base64_decode($_COOKIE['lib_book']), true);
    foreach ($books as $key => $value) {
      $book = new Book_M();
      $updateQty = $book->update_qty($value);
    }
    $user = json_decode(base64_decode($_COOKIE['user']), true);
    $log = new Log_M();
    $log->create($user[1],"đã <span class='text-danger'>hoàn trả sách </span> từ sinh viên <b>".$read['loan_user']."</b> từ mượn.",$user[3]);

    setcookie("msg", "Đã xác nhận trả!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/loans'); 
?>