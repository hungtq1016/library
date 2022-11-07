<?php
include_once '../../Model/Category_M.php';
include_once '../../Model/Log_M.php';    $id = $_GET['id'];
    $category = new Category_M();
    $read = $category->read($id);
    $category->update_visible($id);
    $user = json_decode(base64_decode($_COOKIE['user']) , true);
    $log = new Log_M();
    $log->create($user[1], "đã thay đổi trạng thái <span class='text-warning'>hiện</span> của <b>" . $read['category_name'] . "</b> từ thể loại.", $user[3]);
    setcookie("msgUpdate", "Hiện thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/categories'); 
?>