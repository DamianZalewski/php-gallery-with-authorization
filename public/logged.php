<?php
    include '../includes/checkAuth-inc.php';
    include '../includes/uploadImage-inc.php';
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
