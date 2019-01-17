<?php
include "dbauth-inc.php";
$uploadFile = function($image) use ($servername, $username, $password, $dbname) {
    $imageData = $image['tmp_name'];
    $imageName = $image['name'];
    $imgContent = addslashes(file_get_contents($imageData));

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO uploadImages(userId, image, name) VALUES ('".$_SESSION['userId']."','".$imgContent."','".$imageName."')";

    if(!mysqli_query($conn, $sql)) {
        echo 'Image upload error!';
    }

    mysqli_close($conn);
};
