<?php
include "dbauth-inc.php";


$doLogin = function($login, $pwd) use ($servername, $username, $password, $dbname) {
    echo "dologin: $pwd";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id FROM users WHERE login='".$login."' AND pwd = '".$pwd."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["userId"] = $row['id'];
            header("Location: logged.php");
        }
    } else {
        $message = "Wrong login or password!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    mysqli_close($conn);
};
