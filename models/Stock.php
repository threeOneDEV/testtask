<?php

namespace models;

use PDO;
use PDOException;

class Stock{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll(){
        try{
            $query = "SELECT * FROM `stocks`";
            $stmt = $this->db->query($query);
            $stocks = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $stocks;
        }catch(PDOException){
            return false;
        }
    }

    public function delete($id){
        $query = "DELETE FROM `stocks` WHERE `id` = ?";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return true;
        }catch(PDOException){
            return false;
        }
    }
}