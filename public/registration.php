<?php
include "../includes/doRegistration-inc.php";
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
<h2>Registration</h2>

<form method="post" action="">
    <input type="text" name="login" placeholder="login"/>
    <input type="password" name="pwd" placeholder="password"/>
    <input type="submit" value="register"/>
</form>
<p>

<?php
    if(isset($_POST['login']) & isset($_POST['pwd'])) {
        $doRegistration($_POST['login'], $_POST['pwd']);
    };
?>
</p>
</body>
</html>
