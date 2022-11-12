<?php
    include_once 'connect.php';
    class Category_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT * FROM category
                    INNER JOIN code ON category.category_status = code.status_code';
            $response = $db->getList($query);
            return $response;
        }

        public function storeClient($limit)
        {
            $db = new connect();
            $query = "SELECT category.* FROM category 
                    INNER JOIN code ON category.category_status = code.status_code LIMIT $limit";
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$status)
        {
            $query = "INSERT INTO category(category_name,category_status) VALUES (?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$status]);   
        }
        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM category WHERE category_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function update($name,$id)
        {
            $query = "UPDATE category SET category_name = ? WHERE category_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$name,$id]);
        }

        public function update_visible($id)
        {
            $query = "UPDATE category SET category_status = ? WHERE category_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([6,$id]);
        }
        public function update_invisible($id)
        {
            $query = "UPDATE category SET category_status = ? WHERE category_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([7,$id]);
        }
        public function delete($id)
        {
            $query = "DELETE FROM category WHERE category_id=?";
            $db = new connect();
            $delete=$db->excePrepare($query);
            $delete->execute([$id]);
        }
        public function isExist($name)
        {
            $db = new connect();
            $query = "SELECT * FROM category WHERE category_name= '$name'";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>