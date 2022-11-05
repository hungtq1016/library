<?php
    include 'connect.php';
    class Author_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT * FROM authors';
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$yob,$yod,$image,$add,$status)
        {
            $query = "INSERT INTO authors(author_name,author_yob,author_yod,author_image,author_add,author_status) VALUES (?,?,?,?,?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$yob,$yod,$image,$add,$status]);
        }

        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM authors WHERE author_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function update_visible($id)
        {
            $query = "UPDATE authors SET author_status = ? WHERE author_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute(["Hiện",$id]);
        }
        public function update_invisible($id)
        {
            $query = "UPDATE authors SET author_status = ? WHERE author_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute(["Ẩn",$id]);
        }
        public function delete($id)
        {
            $query = "DELETE FROM authors WHERE author_id=?";
            $db = new connect();

            $delete=$db->excePrepare($query);
            $delete->execute([$id]);
        }
    }

?>