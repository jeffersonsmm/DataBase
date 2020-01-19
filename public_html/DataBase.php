<?php

class DataBase extends PDO
{
    public $conn = '';

    public function __construct()
    {
        try {
            $host = 'localhost';
            $db = 'test';
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
            $user = 'root';
            $pwd = '';
            $this->conn = new PDO($dsn, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        }catch (PDOException $e) {
            die("Erro: <code>" . $e->getMessage() . "</code>");
        }
    }

    public function __clone(){}

    public function __destruct()
    {
        $this->conn = null;
    }

}