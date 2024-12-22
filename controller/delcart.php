<?php

if (isset($_GET['id'])) {
    include "../config/database.php";
    $product_id = $_GET['id'];
    $sql = "DELETE FROM `cart` WHERE `product_id` =  '$product_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
     echo 
        "<script>
          alert('Deleted data successfully');
          window.location.href = 'http://project/pages/add_to_cart.php';
        </script>";
  
    }
  }
//   if (isset($_POST['clear'])) {
//     include "../config/database.php";
//     $product_id = $_GET['id'];
//     $sql = "DELETE FROM `cart` WHERE `product_id` =  '$product_id'";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//      echo 
//         "<script>
//           alert('Deleted data successfully');
//           window.location.href = 'http://project/pages/add_to_cart.php';
//         </script>";
  
//     }
//   }
  ?>