<?php

class dbConnection {
    protected $dbConn;
    public $dbName = 'users';
    public $dbUser = 'root';
    public $dbPassword = '';
    public $dbHost = 'localhost';

    function connect() {
        try
        {
            $this->dbConn = new PDO("mysql:host=$this->db_host;dbname=$this->dbName",$this->dbUser,$this->dbPassword);
            echo 'git gud';
        } catch(PDOException $e)
        {
            echo 'Error'.$e->getMessage();
        }
    }
}