<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['userId'])) {
    header("Location: index.php");
}
    include '../includes/uploadImage-inc.php';
//?>

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
    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php
        include_once "../includes/showImages-inc.php";
    ?>
</div>
<?php
    if(isset($_POST['submit'])) {
        $uploadFile($_FILES['fileToUpload']);
    }
?>
</body>
</html>
