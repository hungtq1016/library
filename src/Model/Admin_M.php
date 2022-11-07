<?php
    include_once 'connect.php';
    class Admin_M{
        public function __construct() {   
        }

        public function logIn($username,$password)
        {
            //Goi toi database
            $db = new connect();
            //Goi cau query
            $query = "SELECT * FROM admin WHERE admin_name='$username' and admin_password='$password'";
            //Lay ket qua tra ve tu db
            $result= $db->getList($query);
            //Tra ket qua ve
            $response = $result->fetch();
            return $response;
        }
    }

?>