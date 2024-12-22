<?php


if (isset($_POST['wishlist'])) {
  $product_id = $_POST['product_id'];
  if (empty($_SESSION)) {
$error =  "You must be logged in to add to wishlist";
  }else{
 
  $user_id = $_SESSION['banno']['id'];
  // var_dump($user_id);
  // exit();
  if (!empty($user_id)){
    $sql = "INSERT INTO `wishlist`(`product_id`,`user_id`) VALUES ('$product_id','$user_id')";
      $result = mysqli_query($conn, $sql);
      if ($result > 0) {
        $success = "oo yeah";
      } else {
        echo "nt fnd";
      }
  }else {
    $error= "please login";
  }

      
    }
  }


if (isset($_GET['id'])) {
  include "../config/database.php";
  $product_id = $_GET['id'];
  $sql = "DELETE FROM `wishlist` WHERE `product_id` ='$product_id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   echo 
      "<script>
        alert('Deleted data successfully');
        window.location.href = 'http://project/pages/wishlist.php';
      </script>";

  }
}
