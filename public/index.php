<?php
include "../includes/doLogin-inc.php";
@session_start();
if (isset($_SESSION['userId'])) {
    header("Location: logged.php");
}

?>

<html lang="en">
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/layout.css">
</head>
<body>
<?php
    include_once "../includes/header-inc.php";
?>


</body>
</html>
