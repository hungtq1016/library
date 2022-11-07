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

        public function create($name,$category,$stock,$image,$author,$status)
        {
            $query = "INSERT INTO books(book_name,book_category,book_stock,book_image,book_author,book_status) VALUES (?,?,?,?,?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$category,$stock,$image,$author,$status]);
        }

        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM books WHERE book_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function update($name,$category,$stock,$image,$author,$id)
        {
            $query = "UPDATE books SET book_name = ?,book_category =? ,book_stock =? ,book_image=? ,book_author=? WHERE book_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$name,$category,$stock,$image,$author,$id]);
        }

        public function update_visible($id)
        {
            $query = "UPDATE books SET book_status = ? WHERE book_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute(["Hiện",$id]);
        }
        public function update_invisible($id)
        {
            $query = "UPDATE books SET book_status = ? WHERE book_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute(["Ẩn",$id]);
        }
        public function delete($id)
        {
            $query = "DELETE FROM books WHERE book_id=?";
            $db = new connect();
            $delete=$db->excePrepare($query);
            $delete->execute([$id]);
        }
        public function isExist($name)
        {
            $db = new connect();
            $query = "SELECT * FROM books WHERE book_name= '$name'";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>