<?php
include "dbauth-inc.php";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $userId = $_SESSION['userId'];
    $sql = "SELECT image FROM uploadImages WHERE userId = '$userId'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
        }
    } else {
        echo "Image download error!";
    }

    mysqli_close($conn);
