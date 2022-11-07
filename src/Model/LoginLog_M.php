<?php
    include_once 'connect.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    class LoginLog_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT * FROM login_log ORDER BY created DESC LIMIT 20';
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$desc,$status)
        {
            $query = "INSERT INTO login_log(ll_name,ll_desc,ll_status,created) VALUES (?,?,?,?)";
            $day = date("Y-m-d h:i:sa");
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$desc,$status,$day]);
        }
    }

?>