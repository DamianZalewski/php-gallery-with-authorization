<?php

class dbConnection {
    protected $dbConn;
    public $dbName = 'praktykanci';
    public $dbUser = 'd.zalewski';
    public $dbPassword = 'a[!KY0kXh<YY<+2b';
    public $dbHost = 'sql-other';

    function connect() {
        try
        {
            $this->dbConn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName",$this->dbUser,$this->dbPassword);
            return $this->dbConn;
        } catch(PDOException $e)
        {
            echo 'Error'.$e->getMessage();
        }
    }
}