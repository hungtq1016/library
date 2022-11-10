<?php
    include '../../Model/Admin_M.php';
    include '../../Model/LoginLog_M.php';
            if (isset($_POST['username']) && isset($_POST['password'])) {

                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                $admin = new Admin_M();
                $login =$admin->logIn($username,$password);
        
                if ($login == true) {
                    $log = new LoginLog_M();
                    $log->create($username,' đã ','đăng nhập');
                    setcookie("user", base64_encode(json_encode($login)), time() + (86400 * 30), "/");
                    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/');                  
                }else{
                    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/login');                  
                }
            }
?>