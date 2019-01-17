<?php
include "dbConnection.php";

 class uploadImages
 {
     private $link;

     function __construct()
     {
         $dbconn = new dbConnection;
         $this->link = $dbconn->connect();
         return $this->link;
     }

     function deleteImageById($id) {
         $query = $this->link->prepare("DELETE FROM uploadImages WHERE id=?");
         $query->execute(array($id));
     }

     function fetchLatestImages() {
         $query = $this->link->prepare("SELECT image, name FROM uploadImages ORDER BY id DESC LIMIT 6");
         $query->execute();

         return $query->fetchAll(PDO::FETCH_ASSOC);
     }
 }