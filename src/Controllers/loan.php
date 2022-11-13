<?php
    include_once '../Model/Loan_M.php';
    include_once '../Model/Log_M.php';
    include_once '../Model/Book_M.php';
    include_once '../Model/Mail_M.php';

    $mailer = new Mail_M();
    $loan = new Loan_M();
    $log = new Log_M();
    $book = new Book_M();

    $user = json_decode(base64_decode($_COOKIE['user']) , true);
    $books =(isset($_COOKIE['lib_book'])) ? json_decode(base64_decode($_COOKIE['lib_book']), true) : '';

    $action = $_GET['action'];
    $id = $_GET['id'];
    switch ($action):
        case "lichsu":
            $store = $loan->readEmail($id);
            echo '<ul class="list-group">';
            while($set = $store->fetch()):
                if ($set['ld_status']==0) {
                    echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-success">'.$set['status_name'].'</span></li>';
                }else if($set['ld_status']==1){
                    echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-warning">'.$set['status_name'].'</span></li>';
                }else{
                    echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-danger">'.$set['status_name'].'</span></li>';
                }
                
            endwhile;
            echo '</ul>';
            break;        
    case "xoa":
        if (($key = array_search($id, $books)) !== false) {
            unset($books[$key]);
            $pushCookie = base64_encode(json_encode($books));
            setcookie("lib_book", $pushCookie, time() + 600, "/");
            setcookie("msg", "Xóa Thành Công", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/muon/');
        }
        break;
    case "muonsach":
        $user = $_POST['email'];
        $email = explode("@",$user)[1];
        if ($email != "itc.edu.vn") {
            setcookie("err", "Email Không Đúng Định Dạng! Vui Lòng Nhập Lại", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/muon');
            return;
        }
        $start = date("Y-m-d");
        $end = date("Y-m-d", strtotime($start. ' + 7 days'));
        if ($books != "") {   
            foreach ($books as $key => $value) {
                $updateQty = $book->update_stock($value);
            }
            $create = $loan->create($user,$start,$end,0,4);
            $content ="Bạn đã mượn ";
            foreach ($books as $key => $value) {
                $createDetail = $loan->createDetail($create,$value,4);
                $read = $book->read($value);
                $content .= ", ".$read['book_name'];
            }
            unset($_COOKIE['lib_book']); 
            $content .= " vui lòng đến thư viện trường để nhận <div>-CĐ CNTT-</div>";
            $mailer->create($user,"Thông báo mượn sách",$content);
            setcookie('lib_book', null, -1, '/'); 
            setcookie("msg","Mượn Thành Công! Vui lòng đến với thư viện nhận sách", time() + 15, "/");
        
        }else{
            setcookie("err", "Mượn Thất Bại!", time() + 15, "/");
        }
        header('Location:http://' . $_SERVER['HTTP_HOST'] . '/muon/');
        break;
    case "detail":
        $store = $loan->storeDetail($id);
        echo '<ul class="list-group">';
        while($set = $store->fetch()):
            if ($set['ld_status']==0) {
                echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-success">'.$set['status_name'].'</span></li>';
            }else if($set['ld_status']==1){
                echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-warning">'.$set['status_name'].'</span></li>';
            }else{
                echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-danger">'.$set['status_name'].'</span></li>';
            }
            
        endwhile;
        echo '</ul>';
        break;
    case "tienphat":
        if (isset($_POST['money'])) {
            $money=$_POST['money'];
            $id=$_POST['hiddenId'];
            $loan->updateFine($money,$id);
            $log->create($user[1],"đã <span class='text-info'>thay đổi</span>  <b>".$money."</b> từ tiền phạt.",$user[3]);
            setcookie("msg", "Thay đổi thành công!", time() + 15, "/");
            header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/admin/'.'fine/'.$id);         
        }
        break;
    case "mat":
        $read = $loan->read($id);
        $loan->update_loss($id);
        $log->create($user[1],"đã <span class='text-danger'>báo mất </span> của sinh viên <b>".$read['loan_user']."</b> từ mượn.",$user[3]);
        $user = $_GET['email'];
        $content = "Bạn đã làm mất sách vui lòng liên hệ thủ thư <div>-CĐ CNTT-</div>";
        $mailer->create($user,"Thông báo mất sách",$content);
        setcookie("msg", "Đã báo mất!", time() + 15, "/");
        header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/loans'); 
        break;  
    case "tra":
        $read = $loan->read($id);
        $loan->update_return($id);
        $updateQty = $book->update_qty($id);
        $log->create($user[1],"đã <span class='text-danger'>hoàn trả sách </span> từ sinh viên <b>".$read['loan_user']."</b> từ mượn.",$user[3]);
    
        setcookie("msg", "Đã xác nhận trả!", time() + 15, "/");
        header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/loans'); 
        break;
    case "muon":
        if ($books!= "") {
            if (count($books) >= 3) {
                setcookie("err", "Không Thể Mượn Quá 3 Cuốn Sách", time() + 15, "/");
                header('Location:http://' . $_SERVER['HTTP_HOST'] . '/sach/'.$id);
                return;
            }
            array_push($books, $id);
            $pushCookie = base64_encode(json_encode($books));
            setcookie("lib_book", $pushCookie, time() + 600, "/");
            setcookie("msg", "Thêm Thành Công", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/sach/'.$id);
        } else {
            $books = array();
            array_push($books, $id);
            $pushCookie = base64_encode(json_encode($books));
            setcookie("lib_book", $pushCookie, time() + 600, "/");
            setcookie("msg", "Thêm Thành Công", time() + 15, "/");
            header('Location:http://' . $_SERVER['HTTP_HOST'] . '/sach/'.$id);
        }  
        break;
    case "confirm":
        $read = $loan->read($id);
        $loan->update_confirm($id);
        $loan->update_detail($id);
        $log->create($user[1], "đã <span class='text-info'>xác nhận </span> cho mượn của sinh viên <b>" . $read['loan_user'] . "</b> từ mượn.", $user[3]);
        setcookie("msg", "Đã xác nhận!", time() + 15, "/");
        header('Location:http://' . $_SERVER['HTTP_HOST'] . '/admin/loans');
        break;
    case "hethan":
        $read = $loan->read($id);
        $loan->update_expired($id,$read['loan_user']);
        $log->create($user[1],"đã báo <span class='text-danger'> hết hận </span> cho sinh viên <b>".$read['loan_user']."</b> từ mượn.",$user[3]);
        $content = "Bạn đã hết hạn vui lòng đưa sách về thư viện<div>-CĐ CNTT-</div>";
        $mailer->create($user,"Thông báo hết hạn",$content);
        header('Location:http://' . $_SERVER['HTTP_HOST'] . '/admin/loans');
        break;
        default:
        echo "Hình như sai rồi";
    endswitch;
   
?>