<!doctype html>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['userId'])) {
    header("Location: logged.php");
}
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

<div class="container-fluid">
    <div class="row  m-4">
        <div class="col-4 bg-dark p-4">
            <h2 class="text-primary">
                Some title!
            </h2>
            <p class="text-light text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus tempor metus. Proin mi massa, lacinia id mollis vitae, scelerisque in odio. Aliquam eu tincidunt mi. Ut molestie mattis eros id lobortis. Vivamus nec vulputate sem. Nunc consequat ipsum orci, et hendrerit magna sagittis maximus.
            </p>
            <div class='tr'>
                <a href='registration.php'>(Registration)</a>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7 bg-dark p-4">
            <div class="mb-4">
                <h3 class="text-primary">
                    Latest images
                </h3>
            </div>
            <div class="container text-center">
                <div class="row">
                    <?php
                    include "../includes/uploadImages.php";
                    $uploadImages = new uploadImages();
                    $images = $uploadImages->fetchLatestImages();
                    $name = '';
                    $image = '';
                    foreach($images as $row) {
                        echo '
                               <div class="col-4">
                                   <div class="card d-inline-block mb-4" style="width: 18rem; height:18rem;">
                                       <img style="height:14rem;" class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>
                                       <div class="card-body row">
                                           <h4 class="col-12 text-center">'.$row['name'].'</h4>
                                       </div>
                                   </div>
                               </div>
                           ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
