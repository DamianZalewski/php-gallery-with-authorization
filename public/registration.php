<?php
include "../includes/doRegistration-inc.php";
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
<div class="container bg-light pt-4 pb-4 text-center">
<h2>Registration</h2>

<form method="post" action="">
    <input class="mb-2" type="text" name="login" placeholder="login"/>
    <br />
    <input class="mb-2" type="password" name="pwd" placeholder="password"/>
    <br />
    <input class="mb-2" type="submit" value="register"/>
</form>
</div>

<?php
    if(isset($_POST['login']) & isset($_POST['pwd'])) {
        $doRegistration($_POST['login'], $_POST['pwd']);
    };
?>
<
</body>
</html>
