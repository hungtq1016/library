<?php 
    $id = $_POST['id'];
    if (isset($_COOKIE['lib_book'])) {
        $books = json_decode(base64_decode($_COOKIE['lib_book']));
        if (count($books) >= 3) {
            setcookie("err", "Không Thể Mượn Quá 3 Cuốn Sách", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/sach/'.$id);
            return;
        }
        array_push($books, $id);
        $pushCookie = base64_encode(json_encode($books));
        setcookie("lib_book", $pushCookie, time() + 600, "/");
        setcookie("msg", "Thêm Thành Công", time() + 15, "/");
        header('Location:http://' . $_SERVER['HTTP_HOST'] . '/sach/'.$id);
    } else {
        $books = array();
        array_push($books, $id);
        $pushCookie = base64_encode(json_encode($books));
        setcookie("lib_book", $pushCookie, time() + 600, "/");
        setcookie("msg", "Thêm Thành Công", time() + 15, "/");
        header('Location:http://' . $_SERVER['HTTP_HOST'] . '/sach/'.$id);
    }  
?>