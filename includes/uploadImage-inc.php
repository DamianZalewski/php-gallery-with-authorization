<?php
include "dbauth-inc.php";
@session_start();


$uploadFile = function($image) use ($servername, $username, $password, $dbname) {
    $imageData = $image['tmp_name'];
    $imgContent = addslashes(file_get_contents($imageData));

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO uploadImages(userId, image) VALUES ('".$_SESSION['userId']."','".$imgContent."')";

    if(!mysqli_query($conn, $sql)) {
        echo 'Image upload error!';
    }

    mysqli_close($conn);
};
