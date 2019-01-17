<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['userId'])) {
    header("Location: logged.php");
}
include "../includes/doRegistration-inc.php";
?>

<html lang="en">
<head>
    <?php
    include_once "../includes/headMeta-inc.php";
    ?>
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
    <input class="mb-2" type="submit" name="registrationAction" value="register"/>
</form>
</div>

<?php
    if(isset($_POST['login']) & isset($_POST['pwd']) & isset($_POST['registrationAction'])) {
        $doRegistration($_POST['login'], $_POST['pwd']);
    };
?>
</body>
</html>
