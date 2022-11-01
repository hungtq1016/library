<?php
    include '../../Model/Admin_M.php';
            if (isset($_POST['username']) && isset($_POST['password'])) {

                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                $admin = new Admin_M();
        
                $login =$admin->logIn($username,$password);
        
                if ($login == true) {
                    echo '<meta http-equiv="refresh" content="0;url=../../../"/>';
                }else{
                    echo '<script> alert("Dang nhap that bai")</script>';
                    include "./View/login.php";
                }
            }
?>