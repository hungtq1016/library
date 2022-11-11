<?php
    include_once '../../Model/Loan_M.php';
    include_once '../../Model/Book_M.php';

    $user = $_POST['email'];
    $start = date("d/m/Y");
    $end = date("d/m/Y", strtotime($start. ' + 7 days'));
    if (isset($_COOKIE['lib_book'])) {   
        $books = json_decode(base64_decode($_COOKIE['lib_book']));
        $loans = new Loan_M();
        $create = $loans->create($user,$start,$end,0,7);
        foreach ($books as $key => $value) {
            $createDetail = $loans->createDetail($create,$value,7);
        }
        setcookie("msg","Thanh cong", time() + 15, "/");
       
    }else{
        setcookie("err", "that bai", time() + 15, "/");
    }
    header('Location:http://' . $_SERVER['HTTP_HOST'] . '/muon');
?>