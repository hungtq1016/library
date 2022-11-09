<?php
  include_once '../../Model/Loan_M.php';
  include_once '../../Model/Log_M.php';
            if (isset($_POST['money'])) {
                /**
                 * Data được gửi từ form bên view -> loan -> editfine.php
                 */
                $money=$_POST['money'];
                $id=$_POST['hiddenId'];
                $fine = new Loan_M();
                $fine->updateFine($money,$id);

                $user = json_decode(base64_decode($_COOKIE['user']), true);
                $log = new Log_M();
                $log->create($user[1],"đã <span class='text-info'>thay đổi</span>  <b>".$money."</b> từ tiền phạt.",$user[3]);

                setcookie("msg", "Thay đổi thành công!", time() + 15, "/");
                header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/admin/'.'fine/'.$id);         
            }
?>