<?php 
    if (isset($_COOKIE["user"])) {
        header('Location: '.'http://localhost:8001/src/View/dashboard/');   
    }else{
        header('Location: '.'http://localhost:8001/src/View/login.php');

    }

?>