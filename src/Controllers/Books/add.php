<?php
    include '../../Model/Book_M.php';
            if (isset($_POST['name']) && isset($_POST['date']) && isset($_POST['author']) && isset($_POST['category']) && isset($_POST['stock'])) {
                /**
                 * Data được gửi từ form bên view -> books -> add.php
                 */
                $name=$_POST['name'];
                $date=$_POST['date'];
                $author=$_POST['author'];
                $category=$_POST['category'];
                $stock=$_POST['stock'];
                $status ="Hiện";

                /**
                 * Đổi tên ảnh để không bị trùng
                 */
                $targetDir = "../../../public/uploads/";
                $filename = $_FILES["image"]["name"];
                $filetype = end(explode('.',$filename));
                $randName = md5(time().$filename) .'.'. $filetype;
                $targetFilePath = $targetDir . $randName;

                /**
                 * Kiểm tra xem ảnh gửi qua có thuộc 1 trong các định dạng như dưới không
                 */
                $allowTypes = array('jpg','png','jpeg','gif','pdf');
                if(in_array($filetype, $allowTypes)){
                    //Chuyển file tới public/uploads trên server để lưu ảnh
                    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
                    // Thêm vào DB
                        $book = new Book_M();
                        $book->create($name,$category,$stock,'uploads/'.$randName,$author,$status);
                        setcookie("msg", "Thêm thành công!", time() + 15, "/");
                        header('Location: '.'http://localhost:8001/src/View/books/add.php');  
                }else{
                    //Trả về lỗi nếu không đúng định dạng
                    setcookie("err", "File không đúng định dạng!", time() + 30, "/");
                        header('Location: '.'http://localhost:8001/src/View/books/add.php');  
                }


              
               
            }
?>