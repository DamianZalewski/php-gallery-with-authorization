<?php
include "dbConnection.php.php";

 class users
 {
     private $link;

     function __construct()
     {
         $dbconn = new dbConnection;
         $this->link = $dbconn->connect();
         return $this->link;
     }

 }