<?php


if (isset($_POST['add_to_cart'])) {
  $product_id = $_POST['product_id'];

  $quantitty = $_POST['quantity'];

  if (empty($_SESSION)) {
    $error =  "You must be logged in to add to wishlist";
  } else {

    $user_id = $_SESSION['banno']['id'];
    if (!empty($user_id) && !empty($quantitty)) {
      $sql =  "SELECT * FROM `cart` WHERE `product_id` = '$product_id'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_assoc($result);
        $quantity =  $rows['quantity'];
        $quantittyy =  $quantitty + $quantity;
        $sql = "UPDATE `cart` SET `quantity`='$quantittyy', `user_id`  = '$user_id' WHERE `product_id` = '$product_id'";

        $result = mysqli_query($conn, $sql);
        if ($result) {
          $success = "oo yeah";
        }
      } else {
        $sql = "INSERT INTO `cart`(`product_id`, `quantity`, `user_id`) VALUES ('$product_id','$quantitty','$user_id')";
        $result = mysqli_query($conn, $sql);
        if ($result > 0) {
          $success = "oo yeah";
        } else {
          echo "nt fnd";
        }
      }
    }
  }
}
if (isset($_POST['update'])) {
  $product_id = $_POST['product_id'];
  $quantitty = $_POST['quantity'];
  $sql = "UPDATE `cart` SET `quantity`='$quantitty' WHERE `product_id` = '$product_id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $success = "oo yeah";
  }
}
