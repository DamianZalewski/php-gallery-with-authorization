<?php
include "dbauth-inc.php";
include "doLogin-inc.php";

$doRegistration = function($login, $pwd) use ($doLogin, $servername, $username, $password, $dbname) {

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO users(login,pwd) VALUES('".$login."','".$pwd."')";

    if(mysqli_query($conn, $sql)) {
        $doLogin($login,$pwd);
    }
    mysqli_close($conn);
};
