<?php
    include '../../Model/Book_M.php';
    $id = $_GET['id'];
    $book = new Book_M();
    $book->delete($id);
    setcookie("msgUpdate", "Xóa thành công!", time() + 15, "/");
    header('Location: '.'http://localhost:8001/src/View/books/'); 
?>