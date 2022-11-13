<?php
    include_once 'connect.php';
    class Shelf_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = 'SELECT * FROM shelf
                    INNER JOIN code ON shelf.shelf_status = code.status_code';
            $response = $db->getList($query);
            return $response;
        }

        public function storeClient($limit)
        {
            $db = new connect();
            $query = "SELECT shelf.* FROM shelf 
                    INNER JOIN code ON shelf.shelf_status = code.status_code LIMIT $limit";
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$status)
        {
            $query = "INSERT INTO shelf(shelf_name,shelf_status) VALUES (?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$status]);   
        }
        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM shelf WHERE shelf_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function update($name,$id)
        {
            $query = "UPDATE shelf SET shelf_name = ? WHERE shelf_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$name,$id]);
        }

        public function update_visible($id)
        {
            $query = "UPDATE shelf SET shelf_status = ? WHERE shelf_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([6,$id]);
        }
        public function update_invisible($id)
        {
            $query = "UPDATE shelf SET shelf_status = ? WHERE shelf_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([7,$id]);
        }
        public function delete($id)
        {
            $query = "DELETE FROM shelf WHERE shelf_id=?";
            $db = new connect();
            $delete=$db->excePrepare($query);
            $delete->execute([$id]);
        }
        public function isExist($name)
        {
            $db = new connect();
            $query = "SELECT * FROM shelf WHERE shelf_name= '$name'";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>