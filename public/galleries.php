<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['userId'])) {
    header("Location: index.php");
}
include '../includes/uploadImage-inc.php';
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
<?php
include_once "../includes/background-inc.php";
?>
<div class="container-fluid" >
    <div class="row" style="min-height:90vh;">
        <?php
        include_once "../includes/menu-inc.php";
        ?>
        <div class="col-10 p-4">
            <h4 class="text-left">Your galleries:</h4>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])) {
    $uploadFile($_FILES['fileToUpload']);
}
?>
</body>
</html>
