<?php

namespace models;

use PDO;
use PDOException;

class Category{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll(){
        try{
            $query = "SELECT * FROM `categories`";
            $stmt = $this->db->query($query);
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $categories;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function delete($id){
        $query = "DELETE FROM `categories` WHERE `id` = ?";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

}