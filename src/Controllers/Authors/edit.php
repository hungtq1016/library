<?php
  include_once '../../Model/Author_M.php';
  include_once '../../Model/Log_M.php';
            if (isset($_POST['name']) && isset($_POST['yob']) && isset($_POST['yod']) && isset($_POST['add'])) {
                /**
                 * Data được gửi từ form bên view -> author -> edit.php
                 */
                $name=$_POST['name'];
                $yob=$_POST['yob'];
                $yod=$_POST['yod'];
                $add=$_POST['add'];
                $id=$_POST['hiddenId'];
                $image=$_POST['hiddenImg'];
                /**
                 * Đổi tên ảnh để không bị trùng
                 */
                if ($_FILES['image']['name'] == '') {
                    
                    $author = new Author_M();
                    $author->update($name,$yob,$yod,$image,$add,$id);
                    
                    $user = json_decode(base64_decode($_COOKIE['user']), true);
                    $log = new Log_M();
                    $log->create($user[1],"đã <span class='text-info'>thay đổi</span> <b>".$name."</b> từ tác giả.",$user[3]);

                    setcookie("msg", "Thay đổi thành công!", time() + 15, "/");
                }else{
                    $targetDir = "../../../public/author/";
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
                            $author->update($name,$yob,$yod,'author/'.$randName,$add,$id);

                            $user = json_decode(base64_decode($_COOKIE['user']), true);
                            $log = new Log_M();
                            $log->create($user[1],"đã <span class='text-info'>thay đổi</span>  <b>".$name."</b> từ tác giả.",$user[3]);

                            setcookie("msg", "Thay đổi và ảnh thành công!", time() + 15, "/");
                    }else{
                        //Trả về lỗi nếu không đúng định dạng
                        setcookie("err", "File không đúng định dạng!", time() + 30, "/");
                            
                    }
                }
                header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/admin/'.'author/'.$id);         
            }
?>