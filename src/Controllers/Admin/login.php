<?php
    include '../../Model/Admin_M.php';
            if (isset($_POST['username']) && isset($_POST['password'])) {

                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                $admin = new Admin_M();
        
                $login =$admin->logIn($username,$password);
        
                if ($login == true) {
                    setcookie("user", base64_encode(json_encode($login)), time() + (86400 * 30), "/");
                    header('Location: '.'http://localhost:8001/src/View/dashboard/');   
                }else{
                    header('Location: '.'http://localhost:8001/src/View/login.php');
                }
            }
?>