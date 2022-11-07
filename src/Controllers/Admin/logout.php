<?php
    include '../../Model/LoginLog_M.php';
    if (isset($_COOKIE['user'])) {
        $user = json_decode(base64_decode($_COOKIE['user']), true)[1];
        $log = new LoginLog_M();
        $log->create($user,' đã ','đăng xuất');
        unset($_COOKIE['user']); 
        setcookie('user', null, -1, '/'); 
        header('Location:http://'.$_SERVER['HTTP_HOST'].'/login'); 
        return true;
    } else {
        return false;
    }
?>