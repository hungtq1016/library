<?php
    include '../../Model/Book_M.php';
    $id = $_GET['id'];
    $book = new Book_M();
    $book->update_visible($id);
    setcookie("msgUpdate", "Hiện thành công!", time() + 15, "/");
    header('Location: '.'http://localhost:8001/src/View/books/'); 
?>