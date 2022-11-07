<?php
    include_once 'connect.php';
    class Loan_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT * FROM loans';
            $response = $db->getList($query);
            return $response;
        }
        public function storeDetail($id)
        {
            $db = new connect();
            $query = "SELECT books.book_name ,books.book_id FROM loans_detail as ld INNER JOIN books ON ld.ld_book = books.book_id WHERE ld_loan = $id";
            $response = $db->getList($query);
            return $response;
        }
    }

?>