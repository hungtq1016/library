<?php
    include 'connect.php';
    class Book_M{
        public function __construct() {   
        }

        public function read()
        {
            $db = new connect();
            $query = 'SELECT * FROM books ';
            $response = $db->getList($query);
            return $response;
        }
    }

?>