<?php
include_once '../../Model/Author_M.php';
include_once '../../Model/Log_M.php';
    $id = $_GET['id'];
    $author = new Author_M();
    $read = $author->read($id);
    $author->update_invisible($id);

    $user = json_decode(base64_decode($_COOKIE['user']), true);
    $log = new Log_M();
    $log->create($user[1],"đã thay đổi trạng thái <span class='text-primary'>ẩn</span> của <b>".$read['author_name']."</b> từ tác giả.",$user[3]);

    setcookie("msgUpdate", "Ẩn thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/authors'); 
    ?>