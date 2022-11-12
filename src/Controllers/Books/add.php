<?php
include_once '../../Model/Book_M.php';
include_once '../../Model/Log_M.php';
if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['author']) && isset($_POST['category']) && isset($_POST['stock']))
{
    /**
     * Data được gửi từ form bên view -> books -> add.php
     */
    $name = $_POST['name'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];
    $shelf = $_POST['shelf'];
    $major = $_POST['major'];
    $status = "Hiện";
    $book = new Book_M();
    $check = $book->isExist($name);

        if ($check):
            setcookie("err", "Đã Tồn Tại Sách", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/admin/book');
            return;
        endif;
        /**
         * Đổi tên ảnh để không bị trùng
         */
        $targetDir = "../../../public/books/";
        $filename = $_FILES["image"]["name"];
        $filetype = end(explode('.', $filename));
        $randName = md5(time() . $filename) . '.' . $filetype;
        $targetFilePath = $targetDir . $randName;

        /**
         * Kiểm tra xem ảnh gửi qua có thuộc 1 trong các định dạng như dưới không
         */
        $allowTypes = array(
            'jpg',
            'png',
            'jpeg',
            'gif',
            'pdf'
        );
        if (in_array($filetype, $allowTypes)){
            //Chuyển file tới public/uploads trên server để lưu ảnh
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
            // Thêm vào DB
            $book->create($name, $category, $stock, 'books/' . $randName, $author, $status,$major,$shelf,0);
            $user = json_decode(base64_decode($_COOKIE['user']) , true);
            $log = new Log_M();
            $log->create($user[1], "đã <span class='text-success'>thêm</span> <b>" . $name . "</b> vào sách.", $user[3]);
            setcookie("msg", "Thêm Thành Công", time() + 15, "/");
        }else{
            //Trả về lỗi nếu không đúng định dạng
            setcookie("err", "File không đúng định dạng!", time() + 30, "/");
        }
    
    header('Location:http://' . $_SERVER['HTTP_HOST'] . '/admin/book');
}
?>
