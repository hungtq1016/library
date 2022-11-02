<?php
    if (isset($_COOKIE['user'])) {
        unset($_COOKIE['user']); 
        setcookie('user', null, -1, '/'); 
        echo '<script> alert("Dang xuat thang cong")</script>';
        echo '<meta http-equiv="refresh" content="0;url=../../../"/>';
        return true;
    } else {
        return false;
    }
?>