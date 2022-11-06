<?php
    include '../../Model/Author_M.php';
    $id = $_GET['id'];
    $author = new Author_M();
    $author->update_invisible($id);
    setcookie("msgUpdate", "Ẩn thành công!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/authors'); 
    ?>