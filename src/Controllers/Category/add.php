<?php
include_once '../../Model/Category_M.php';
include_once '../../Model/Log_M.php';
            if (isset($_POST['name'])) {
                /**
                 * Data được gửi từ form bên view -> category -> add.php
                 */
                $name=$_POST['name'];
                $status =4;
                $category = new Category_M();

                $check = $category->isExist($name);
                if($check):
                    setcookie("err", "Đã Tồn Tại Thể Loại", time() + 15, "/");
                else:
                    $create = $category->create($name,$status);
                    $user = json_decode(base64_decode($_COOKIE['user']) , true);
                    $log = new Log_M();
                    $log->create($user[1], "đã <span class='text-success'>thêm</span> <b>" . $name . "</b> vào thể loại.", $user[3]);
                    setcookie("msg", "Thêm Thành Công", time() + 15, "/");
                endif;
                header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/category'); 
            }
?>