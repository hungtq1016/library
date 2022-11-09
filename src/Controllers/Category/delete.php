<?php
include_once '../../Model/Category_M.php';
include_once '../../Model/Log_M.php';    $id = $_GET['id'];
    $category = new Category_M();
    $read = $category->read($id);
    $category->delete($id);
    $user = json_decode(base64_decode($_COOKIE['user']) , true);
    $log = new Log_M();
    $log->create($user[1], "đã <span class='text-danger'>xóa</span> <b>" . $read['category_name'] . "</b> từ thể loại.", $user[3]);
    setcookie("msgUpdate", "Xóa thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/categories'); 
    ?>