<?php
    include_once 'connect.php';
    class Book_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT books.*,authors.author_name,category.category_name,major.major_name,shelf.shelf_name FROM books
                    INNER JOIN authors ON books.book_author = authors.author_id
                    INNER JOIN category ON books.book_category = category.category_id
                    INNER JOIN major ON books.book_major = major.major_id
                    INNER JOIN shelf ON books.book_shelf = shelf.shelf_id';
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$category,$qty,$image,$author,$status,$major,$shelf,$instock)
        {
            $query = "INSERT INTO books(book_name,book_category,book_qty,book_image,book_author,book_status,book_major,book_shelf,book_instock) VALUES (?,?,?,?,?,?,?,?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$category,$qty,$image,$author,$status,$major,$shelf,$instock]);
        }

        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM books 
                    INNER JOIN authors ON books.book_author = authors.author_id
                    INNER JOIN category ON books.book_category = category.category_id
                    INNER JOIN major ON books.book_major = major.major_id
                    INNER JOIN shelf ON books.book_shelf = shelf.shelf_id
                    WHERE book_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function readStatement($statement)
        {
            $db = new connect();
            $query = "SELECT books.*,category.category_name,authors.author_name FROM books 
                    INNER JOIN authors ON books.book_author = authors.author_id
                    INNER JOIN category ON books.book_category = category.category_id
                    $statement";
            $response = $db->getList($query);
            return $response;
        }

        public function update($name,$category,$qty,$image,$author,$status,$major,$shelf,$id)
        {
            $query = "UPDATE books SET book_name = ?,book_category =? ,book_qty =? ,book_image=? ,book_author=?,book_status=?,book_major=?,book_shelf=? WHERE book_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$name,$category,$qty,$image,$author,$status,$major,$shelf,$id]);
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

        public function update_qty($id)
        {
            $query = "UPDATE books as b
            INNER JOIN loans_detail as ld ON b.book_id = ld.ld_book
            SET b.book_qty = b.book_qty + 1
            WHERE ld.ld_id IN(
                SELECT ld_id FROM loans_detail WHERE loans_detail.ld_loan = ?
            )";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$id]);
        }

        public function update_stock($id)
        {
            $query = "UPDATE books SET book_qty = book_qty - 1,book_instock = book_instock + 1 WHERE book_id= ? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$id]);
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

        public function count()
        {
            $db = new connect();
            $query = "SELECT COUNT(book_id) AS c FROM books";
            $response = $db->getInstance($query);
            return $response;
        }

        public function countWithFilter($value)
        {
            $db = new connect();
            $query = "SELECT COUNT(book_id) AS c FROM books WHERE book_status = '$value'";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>