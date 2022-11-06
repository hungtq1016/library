<?php
    include '../../Model/Author_M.php';
    $id = $_GET['id'];
    $author = new Author_M();
    $author->delete($id);
    setcookie("msgUpdate", "Xóa thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/authors'); 
    ?>