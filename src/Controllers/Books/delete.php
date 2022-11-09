<?php
 include_once '../../Model/Book_M.php';
 include_once '../../Model/Log_M.php';
    $id = $_GET['id'];
    $book = new Book_M();
    $read = $book->read($id);
    $book->delete($id);
    
    $user = json_decode(base64_decode($_COOKIE['user']), true);
    $log = new Log_M();
    $log->create($user[1],"đã <span class='text-danger'>xóa</span> <b>".$read['book_name']."</b> từ sách.",$user[3]);

    setcookie("msgUpdate", "Xóa thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/books'); 
?>