<?php
include_once '../../Model/Author_M.php';
include_once '../../Model/Log_M.php';
if (isset($_POST['name']) && isset($_POST['add']))
{
    /**
     * Data được gửi từ form bên view -> authors -> add.php
     */
    $name = $_POST['name'];
    $yob = $_POST['yob'];
    $yod = $_POST['yod'];
    $add = $_POST['add'];
    $status = "Hiện";
    $author = new Author_M();
    $check = $author->isExist($name);

        if ($check):
            setcookie("err", "Đã Tồn Tại Tác Giả", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/author');
            return;
        endif;
        /**
         * Đổi tên ảnh để không bị trùng
         */
        $targetDir = "../../../public/author/";
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
            $author->create($name, $yob, $yod, 'author/' . $randName, $add, $status);
            $user = json_decode(base64_decode($_COOKIE['user']) , true);
            $log = new Log_M();
            $log->create($user[1], "đã <span class='text-success'>thêm</span> <b>" . $name . "</b> vào tác giả.", $user[3]);
            setcookie("msg", "Thêm Thành Công", time() + 15, "/");
        }else{
            //Trả về lỗi nếu không đúng định dạng
            setcookie("err", "File không đúng định dạng!", time() + 30, "/");
        }
    
    header('Location:http://' . $_SERVER['HTTP_HOST'] . '/author');
}
?>
