<?php
    include '../../Model/Category_M.php';
            if (isset($_POST['name'])) {
                /**
                 * Data được gửi từ form bên view -> category -> add.php
                 */
                $name=$_POST['name'];
                $status ="Hiện";
                $category = new Category_M();

                $check = $category->isExist($name);
                if($check):
                    setcookie("err", "Đã Tồn Tại Thể Loại", time() + 15, "/");
                else:
                    $create = $category->create($name,"Hiện");
                    setcookie("msg", "Thêm Thành Công", time() + 15, "/");
                endif;
                header('Location:http://'.$_SERVER['HTTP_HOST'].'/category'); 
            }
?>