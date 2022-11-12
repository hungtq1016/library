<?php
  include_once '../../Model/Loan_M.php';
  include_once '../../Model/Log_M.php';
    $id = $_GET['id'];
    $loan = new Loan_M();
    $read = $loan->read($id);
    $loan->update_confirm($id);
    $loan->update_detail($id);

    $user = json_decode(base64_decode($_COOKIE['user']), true);
    $log = new Log_M();
    $log->create($user[1],"đã <span class='text-info'>xác nhận </span> cho mượn của sinh viên <b>".$read['loan_user']."</b> từ mượn.",$user[3]);

    setcookie("msg", "Đã xác nhận!", time() + 15, "/");
    header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/loans'); 
?>