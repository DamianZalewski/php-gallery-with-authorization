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
    <title>Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/layout.css">
</head>
<body>
<?php
    include_once "../includes/header-inc.php";
?>
<div class="container bg-light pt-4 pb-4">
    <h2 class="text-center mb-4">Registration</h2>

    <?
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = trim($_POST['login']);
        $pwd = trim($_POST['pwd']);
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $email = trim($_POST['email']);
        $birthday = empty(trim($_POST['birthday'])) ? NULL : trim($_POST['birthday']);
        $photo = !empty($_FILES['photo']['name']) ? addslashes(file_get_contents($_FILES['photo']['tmp_name'])) : NULL;

        if (!empty($login) & !empty($pwd) & !empty($name) & !empty($surname) & !empty($email) & isset($_POST['registrationAction'])) {
            $doRegistration($name, $surname, $email, $birthday, $photo, $login, $pwd);
        } else {
            $error = "You missed some date!";
        };
    }
    ?>


    <form class="w-50 ml-auto mr-auto" method="post" enctype="multipart/form-data" action="<? htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="name">Name*: </label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="name" placeholder="name"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="surname">Surname*: </label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="surname" placeholder="surname"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="login">Login*: </label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="login" placeholder="login"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="email">E-mail*:</label>
            <div class="col-sm-9">
                <input class="form-control" type="email" name="email" placeholder="e-mail"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="birthday">Date of birth:</label>
            <div class="col-sm-9">
                <input class="form-control"  type="date" name="birthday" placeholder="birthday"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="password">Password*:</label>
            <div class="col-sm-9">
                <input class="form-control" type="password" name="pwd" placeholder="password"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" >Your photo:</label>
            <div class="col-sm-9">
                <input type="file" name="photo">
            </div>
        </div>

        <div style="color:red">
            <?php
                if (isset($error)) {
                    echo $error;
                }
            ?>
        </div>
        <input class="mt-2 btn btn-primary btn-lg float-right" type="submit" name="registrationAction" value="Register"/>
        <div style="clear: both;"></div>
    </form>
</div>

</body>
</html>
