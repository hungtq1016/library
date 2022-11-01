<?php
    include '../../Model/Admin_M.php';
            if (isset($_POST['username']) && isset($_POST['password'])) {

                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                $admin = new Admin_M();
        
                $login =$admin->logIn($username,$password);
        
                if ($login == true) {
                    setcookie("user", base64_encode(json_encode($info)), time() + (86400 * 30), "/");
                    echo '<meta http-equiv="refresh" content="0;url=../../../"/>';
                }else{
                    echo '<script> alert("Dang nhap that bai")</script>';
                    include "./View/login.php";
                }
            }
?>