<?php

namespace models;

use PDO;
use PDOException;

class Comment{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findAll(){
        try{
            $query = "SELECT * FROM `comments` ORDER BY `id` ASC";
            $stmt = $this->db->query($query);
            $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $comments;
        }catch(PDOException $e){
            return false;
        }
    }

    public function add($data){
        $email = $data['email'];
        $description = $data['description'];
        $query = "INSERT INTO `comments`(`email`,`description`) VALUES (?,?)";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$email, $description]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}