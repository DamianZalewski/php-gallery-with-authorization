<?php
    include '../includes/checkAuth-inc.php';
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
<div>
    Your imaages:
    <form action="uploadImage-inc.php" method="post">
        <input type="submit" value="Send" />
    </form>
</div>


</body>
</html>
