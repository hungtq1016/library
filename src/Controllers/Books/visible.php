<?php
  include_once '../../Model/Book_M.php';
  include_once '../../Model/Log_M.php';
    $id = $_GET['id'];
    $book = new Book_M();
    $read = $book->read($id);
    $book->update_visible($id);

    $user = json_decode(base64_decode($_COOKIE['user']), true);
    $log = new Log_M();
    $log->create($user[1],"đã thay đổi trạng thái <span class='text-warning'>hiện</span> của <b>".$read['book_name']."</b> từ sách.",$user[3]);

    setcookie("msgUpdate", "Hiện thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/books'); 
?>