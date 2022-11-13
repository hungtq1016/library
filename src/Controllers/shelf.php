<?php
    include_once '../Model/Shelf_M.php';
    include_once '../Model/Log_M.php';

    $shelf = new Shelf_M();
    $log = new Log_M();
    $user = json_decode(base64_decode($_COOKIE['user']) , true);

    $action = $_GET['action'];
    $id = $_GET['id'];
    switch ($action):
        case "add":
            if (isset($_POST['name'])) {

                $name=$_POST['name'];
                $status =6;
    
                $check = $shelf->isExist($name);
                if($check):
                    setcookie("err", "Đã Tồn Tại Kệ", time() + 15, "/");
                else:
                    $create = $shelf->create($name,$status);
                    $log->create($user[1], "đã <span class='text-success'>thêm</span> <b>" . $name . "</b> vào kệ.", $user[3]);
                    setcookie("msg", "Thêm Thành Công", time() + 15, "/");
                endif;
                header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/shelf'); 
            }
        break;
        case "edit":
            if (isset($_POST['name'])) {
                $name=$_POST['name'];
                $id=$_POST['hiddenId'];

                $shelf->update($name,$id);

                $log->create($user[1],"đã <span class='text-info'>thay đổi</span>  <b>".$name."</b> từ kệ.",$user[3]);
                setcookie("msg", "Thay đổi thành công!", time() + 15, "/");
                header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/admin/'.'shelf/'.$id);         
            }
        break;
        case "delete":
            $read = $shelf->read($id);
            $shelf->delete($id);

            $log->create($user[1], "đã <span class='text-danger'>xóa</span> <b>" . $read['shelf_name'] . "</b> từ kệ.", $user[3]);
            setcookie("msg", "Xóa thành công!", time() + 15, "/");
            header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/shelfs'); 
        break;
        case "invisible":
            $read = $shelf->read($id);
            $shelf->update_invisible($id);

            $log->create($user[1], "đã thay đổi trạng thái <span class='text-primary'>ẩn</span> của <b>" . $read['shelf_name'] . "</b> từ kệ.", $user[3]);
            setcookie("msg", "Ẩn thành công!", time() + 15, "/");
            header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/shelfs'); 
        break;
        case "visible":
            $read = $shelf->read($id);
            $shelf->update_visible($id);

            $log->create($user[1], "đã thay đổi trạng thái <span class='text-warning'>hiện</span> của <b>" . $read['shelf_name'] . "</b> từ kệ.", $user[3]);
            setcookie("msg", "Hiện thành công!", time() + 15, "/");
            header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/shelfs'); 
        break;
        default:
        echo "Có gì đó không đúng";
    endswitch

?>