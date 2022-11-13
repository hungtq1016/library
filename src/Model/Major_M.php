<?php
    include_once 'connect.php';
    class Major_M{
        public function __construct() {   
        }

        public function store()
        {
            $db = new connect();
            $query = "SELECT * FROM major
                    INNER JOIN code ON major.major_status = code.status_code WHERE major_id>0" ;
            $response = $db->getList($query);
            return $response;
        }

        public function storeClient($limit)
        {
            $db = new connect();
            $query = "SELECT major.* FROM major 
                    INNER JOIN code ON major.major_status = code.status_code LIMIT $limit";
            $response = $db->getList($query);
            return $response;
        }

        public function create($name,$status)
        {
            $query = "INSERT INTO major(major_name,major_status) VALUES (?,?)";
            $db = new connect();
            $create=$db->excePrepare($query);
            $create->execute([$name,$status]);   
        }
        public function read($id)
        {
            $db = new connect();
            $query = "SELECT * FROM major WHERE major_id= $id";
            $response = $db->getInstance($query);
            return $response;
        }

        public function update($name,$id)
        {
            $query = "UPDATE major SET major_name = ? WHERE major_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([$name,$id]);
        }

        public function update_visible($id)
        {
            $query = "UPDATE major SET major_status = ? WHERE major_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([6,$id]);
        }
        public function update_invisible($id)
        {
            $query = "UPDATE major SET major_status = ? WHERE major_id=? ";
            $db = new connect();
            $update=$db->excePrepare($query);
            $update->execute([7,$id]);
        }
        public function delete($id)
        {
            $query = "DELETE FROM major WHERE major_id=?";
            $db = new connect();
            $delete=$db->excePrepare($query);
            $delete->execute([$id]);
        }
        public function isExist($name)
        {
            $db = new connect();
            $query = "SELECT * FROM major WHERE major_name= '$name'";
            $response = $db->getInstance($query);
            return $response;
        }
    }

?>