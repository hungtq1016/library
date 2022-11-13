<?php
    include_once 'connect.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    class Log_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT * FROM logs ORDER BY log_date DESC LIMIT 20';
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$desc,$role)
        {
            $query = "INSERT INTO logs(log_name,log_desc,log_date,log_role) VALUES (?,?,?,?)";
            $date = date("Y-m-d");
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$desc,$date,$role]);
        }
        public function count($value)
        {
            $db = new connect();
            $query = "SELECT COUNT(log_id) AS c FROM logs $value";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>