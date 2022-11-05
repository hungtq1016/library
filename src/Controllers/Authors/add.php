<?php
    include '../../Model/Author_M.php';
            if (isset($_POST['name']) && isset($_POST['add'])) {
                /**
                 * Data được gửi từ form bên view -> books -> add.php
                 */
                $name=$_POST['name'];
                $yob=$_POST['yob'];
                $yod=$_POST['yod'];
                $add=$_POST['add'];
                $status ="Hiện";

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
                        $author = new Author_M();
                        $author->create($name,$yob,$yod,'uploads/'.$randName,$add,$status);
                        setcookie("msgAuth", "Thêm thành công!", time() + 15, "/");
                        header('Location: '.'http://localhost:8001/src/View/author/add.php');  
                }else{
                    //Trả về lỗi nếu không đúng định dạng
                    setcookie("errAuth", "File không đúng định dạng!", time() + 15, "/");
                        header('Location: '.'http://localhost:8001/src/View/author/add.php');  
                }


              
               
            }
?>