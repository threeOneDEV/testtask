<?php

namespace models;

use PDO;
use PDOException;

class Availability{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll(){
        try{
            $query = "SELECT * FROM `availabilities`";
            $stmt = $this->db->query($query);
            $availabilities = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $availabilities;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function delete($id){
        $query = "DELETE FROM `availabilities` WHERE `id` = ?";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

}