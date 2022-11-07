<?php
    include_once 'connect.php';
    class Loan_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT loans.*,code.status_name FROM loans
                    INNER JOIN code ON loans.loan_status = code.status_code';
            $response = $db->getList($query);
            return $response;
        }
        public function storeDetail($id)
        {
            $db = new connect();
            $query = "SELECT books.book_name,ld.ld_status,code.status_name FROM loans_detail as ld 
                    INNER JOIN books ON ld.ld_book = books.book_id
                    INNER JOIN code ON ld.ld_status = code.status_code
                    WHERE ld_loan = $id";
            $response = $db->getList($query);
            return $response;
        }

        public function storeFine()
        {
            $db = new connect();
            $query = "SELECT fine.*,code.status_name FROM fine INNER JOIN code ON fine.fine_type = code.status_code" ;
            $response = $db->getList($query);
            return $response;
        }

        public function readFine($id)
        {
            $db = new connect();
            $query = "SELECT * FROM fine WHERE fine_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function updateFine($money,$id)
        {
            $query = "UPDATE fine SET fine_money = ? WHERE fine_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$money,$id]);
        }

        public function count()
        {
            $db = new connect();
            $query = "SELECT COUNT(*) AS c FROM loans";
            $response = $db->getInstance($query);
            return $response;
        }
        public function countExpired()
        {
            $db = new connect();
            $query = "SELECT COUNT(*) AS c FROM loans WHERE loan_status>1";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>