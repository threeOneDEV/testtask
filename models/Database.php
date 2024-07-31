<?php

namespace models;

use PDO;
use PDOException;

class Database{
    private static $instance;
    private $connection;

    public function __construct()
    {
        $dbName = DB_NAME;
        $dbHost = DB_HOST;
        $dbUser = DB_USER;
        $dbPassword = DB_PASSWORD;
        
        try{
            $dsn = "mysql:host=$dbHost;dbname=$dbName";
            $this->connection = new PDO($dsn,$dbUser,$dbPassword);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return true;
        }catch(PDOException $e){
            echo 'Ошибка подключения к БД';
        }
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }
}