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

        public function createDetail($loan,$book,$status)
        {
            $query = "INSERT INTO loans_detail(ld_loan,ld_book,ld_status) VALUES (?,?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$loan,$book,$status]);   
        }

        public function create($user,$start,$end,$fine,$status)
        {
            $query = "INSERT INTO loans(loan_user,loan_start,loan_end,loan_fine,loan_status) VALUES (?,?,?,?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$user,$start,$end,$fine,$status]);   
            return $db->getId();
        }
        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM loans WHERE loan_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }
        public function readEmail($val)
        {
            $db = new connect();
            $query = "SELECT loans_detail.*,books.book_name,code.status_name FROM loans_detail 
            INNER JOIN books ON loans_detail.ld_book = books.book_id 
            INNER JOIN code ON code.status_code = loans_detail.ld_status 
            WHERE ld_loan IN 
            (SELECT loan_id FROM loans WHERE loan_user= '".$val."' AND loan_status = 1 )";
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
        public function countStatement($statement,$id)
        {
            $db = new connect();
            $query = "SELECT COUNT($id) AS c FROM loans ".$statement;
            $response = $db->getInstance($query);
            return $response;
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

        public function sum()
        {
            $db = new connect();
            $query = "SELECT SUM(loan_fine) AS c FROM loans";
            $response = $db->getInstance($query);
            return $response;
        }

        public function update_confirm($id)
        {
            $query = "UPDATE loans SET loan_status = ? WHERE loan_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([0,$id]);
        }

        public function update_loss($id)
        {
            $query = "UPDATE loans SET loan_status = ?,loan_fine=(SELECT fine_money FROM fine WHERE fine_type = 3) WHERE loan_id=? ";
            $query2 = "UPDATE  loans_detail SET ld_status = ? WHERE ld_loan=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([3,$id]);
            $update2=$db->excePrepare($query2);
            $update2->execute([3,$id]);
        }

        public function update_expired($id,$email)
        {
            $query = "UPDATE loans SET loan_status = ?,loan_fine=(SELECT fine_money FROM fine WHERE fine_type = 2) WHERE loan_id=? ";
            $query2 = "UPDATE  loans_detail SET ld_status = ? WHERE ld_loan=? ";
            $db = new connect();
           
            $update=$db->excePrepare($query);
            $update->execute([2,$id]);
            $update2=$db->excePrepare($query2);
            $update2->execute([2,$id]);
        }

        public function update_return($id)
        {
            $query = "UPDATE loans SET loan_status = ? WHERE loan_id=? ";
            $query2 = "UPDATE  loans_detail SET ld_status = ? WHERE ld_loan=? ";

            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([1,$id]);
            $update2=$db->excePrepare($query2);
            $update2->execute([1,$id]);
        }

        public function update_detail($id)
        {
            $query = "UPDATE  loans_detail SET ld_status = ? WHERE ld_loan=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([0,$id]);
        }
    }

?>