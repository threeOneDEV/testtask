<?php

namespace models;

use PDO;
use PDOException;

class Product{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll(){
        try{
            $query = "SELECT * FROM `products`";
            $stmt = $this->db->query($query);
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function delete($id){
        $query = "DELETE FROM `products` WHERE `id` = ?";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

}