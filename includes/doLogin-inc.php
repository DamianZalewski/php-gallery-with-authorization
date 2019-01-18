<?php
include "dbauth-inc.php";

$doLogin = function($login, $pwd) use ($servername, $username, $password, $dbname) {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, name, surname FROM users WHERE login='".$login."' AND pwd = '".$pwd."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["userId"] = $row['id'];
            $_SESSION['userName'] = $row['name'];
            $_SESSION['userSurname'] = $row['surname'];
            header("Location: logged.php");
        }
    } else {
        // do something with wrong login/password error!
    }
    mysqli_close($conn);
};
