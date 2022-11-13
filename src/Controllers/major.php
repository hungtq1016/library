<?php
    include_once '../Model/Major_M.php';
    include_once '../Model/Log_M.php';

    $major = new Major_M();
    $log = new Log_M();
    $user = json_decode(base64_decode($_COOKIE['user']) , true);

    $action = $_GET['action'];
    $id = $_GET['id'];
    switch ($action):
        case "add":
            if (isset($_POST['name'])) {

                $name=$_POST['name'];
                $status =6;
    
                $check = $major->isExist($name);
                if($check):
                    setcookie("err", "Đã Tồn Tại Khoa", time() + 15, "/");
                else:
                    $create = $major->create($name,$status);
                    $log->create($user[1], "đã <span class='text-success'>thêm</span> <b>" . $name . "</b> vào khoa.", $user[3]);
                    setcookie("msg", "Thêm Thành Công", time() + 15, "/");
                endif;
                header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/major'); 
            }
        break;
        case "edit":
            if (isset($_POST['name'])) {
                $name=$_POST['name'];
                $id=$_POST['hiddenId'];

                $major->update($name,$id);

                $log->create($user[1],"đã <span class='text-info'>thay đổi</span>  <b>".$name."</b> từ khoa.",$user[3]);
                setcookie("msg", "Thay đổi thành công!", time() + 15, "/");
                header('Location: '.'http://'.$_SERVER['HTTP_HOST'].'/admin/'.'major/'.$id);         
            }
        break;
        case "delete":
            $read = $major->read($id);
            $major->delete($id);

            $log->create($user[1], "đã <span class='text-danger'>xóa</span> <b>" . $read['major_name'] . "</b> từ khoa.", $user[3]);
            setcookie("msg", "Xóa thành công!", time() + 15, "/");
            header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/majors'); 
        break;
        case "invisible":
            $read = $major->read($id);
            $major->update_invisible($id);

            $log->create($user[1], "đã thay đổi trạng thái <span class='text-primary'>ẩn</span> của <b>" . $read['major_name'] . "</b> từ khoa.", $user[3]);
            setcookie("msg", "Ẩn thành công!", time() + 15, "/");
            header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/majors'); 
        break;
        case "visible":
            $read = $major->read($id);
            $major->update_visible($id);

            $log->create($user[1], "đã thay đổi trạng thái <span class='text-warning'>hiện</span> của <b>" . $read['major_name'] . "</b> từ khoa.", $user[3]);
            setcookie("msg", "Hiện thành công!", time() + 15, "/");
            header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/majors'); 
        break;
        default:
        echo "Có gì đó không đúng";
    endswitch

?>