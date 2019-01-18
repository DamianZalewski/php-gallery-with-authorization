<h4 class="text-left">Your images:</h4>
<?php

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $userId = $_SESSION['userId'];
    $sql = "SELECT id, image, name FROM uploadImages WHERE userId = '$userId'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card d-inline-block align-top mb-2"  style="width: 18rem; height:18rem;">
  <img style="height:12rem;" class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>
  <div class="card-body row">
  <div class="d-inline-block text-left col">
      <h4>'.$row['name'].'</h4>
</div>
    <div class="text-right d-inline-block col">
    <form action="" method="get">
        <button type="submit" class="btn btn-secondary" name="deleteId" value="'.$row['id'].'">Delete</button>
    </form>
    </div>
  </div>
</div>
            ';

        }
    } else {
        echo "Image download error!";
    }

    mysqli_close($conn);

    if(isset($_GET['deleteId'])) {
        include "uploadImages.php";
        $uploadImages =  new uploadImages();
        $uploadImages->deleteImageById($_GET['deleteId']);
    }
?>

