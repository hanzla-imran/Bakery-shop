
<?php
if (isset($_POST['checkout'])) {
    $user_id = $_SESSION['banno']['id'];
    $sql = "SELECT cart.user_id, cart.product_id, cart.quantity, section_3.new_price
            FROM cart
            INNER JOIN section_3 ON cart.product_id = section_3.id
            WHERE cart.user_id = '$user_id'";
    $resultts = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($resultts)) {
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];
        $price = $row['new_price'];
        
       
        $check_sql = "SELECT * FROM `checkout_1` WHERE product_id = '$product_id'";
        $check_result = mysqli_query($conn, $check_sql);
        
        if (mysqli_num_rows($check_result) > 0) {
          
            $update_sql = "UPDATE `checkout_1` SET quantity = quantity + $quantity  WHERE product_id = '$product_id' &&  user_id = '$user_id'";

            $update_result = mysqli_query($conn, $update_sql);
        } else {
          
            $insert_sql = "INSERT INTO `checkout_1`(`product_id`, `user_id`, `quantity`, `price`) VALUES ('$product_id', '$user_id', '$quantity','$price')";
            $insert_result = mysqli_query($conn, $insert_sql);
        }
    }

    if (!empty($insert_result) || !empty($update_result)) {
       
        $delete_sql = "DELETE FROM `cart` WHERE user_id =  '$user_id'";
        $delete_result = mysqli_query($conn, $delete_sql);

        if ($delete_result) {
            // $success = "Checkout successful!";
            
        } else {
            echo "Failed to remove items from cart";
        }
    } else {
        $error = "Please login to proceed with checkout.";
    }
    header("location:  http://project/pages/check_out.php");
}
?>