<?php
    include '../../Model/Category_M.php';
    $id = $_GET['id'];
    $category = new Category_M();
    $category->update_invisible($id);
    setcookie("msgUpdate", "Ẩn thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/categories'); 
?>