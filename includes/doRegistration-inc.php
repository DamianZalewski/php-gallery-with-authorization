<?php
include "dbauth-inc.php";
include "doLogin-inc.php";

$doRegistration = function($name, $surname, $email, $birthday, $photo, $login, $pwd) use ($doLogin, $servername, $username, $password, $dbname) {

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users(login, pwd, name, surname, email, birthday, photo) ".
            "VALUES('".$login."','".$pwd."','".$name."','".$surname."','".$email."','".$birthday."','".$photo."')";

    if(mysqli_query($conn, $sql)) {
        $doLogin($login,$pwd);
    }
    mysqli_close($conn);
};
