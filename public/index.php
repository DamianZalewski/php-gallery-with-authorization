<?php
include "../includes/doLogin-inc.php";
session_start();
if (isset($_SESSION['userId'])) {
    header("Location: logged.php");
}

?>

<html lang="en">
<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="../styles/layout.css">
</head>
<body>
<?php
    include_once "../includes/header-inc.php";
?>


</body>
</html>
