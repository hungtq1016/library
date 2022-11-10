<?php
  include_once '../../Model/Category_M.php';
  include_once '../../Model/Log_M.php';
            if (isset($_POST['name'])) {
                /**
                 * Data được gửi từ form bên view -> category -> edit.php
                 */
                $name=$_POST['name'];
                $id=$_POST['hiddenId'];
                $category = new Category_M();
                $category->update($name,$id);
                $user = json_decode(base64_decode($_COOKIE['user']), true);
                $log = new Log_M();
                $log->create($user[1],"đã <span class='text-info'>thay đổi</span>  <b>".$name."</b> từ thể loại.",$user[3]);
                setcookie("msg", "Thay đổi thành công!", time() + 15, "/");
                header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/admin/'.'category/'.$id);         
            }
?>