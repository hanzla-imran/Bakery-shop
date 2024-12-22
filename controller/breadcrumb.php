<?php

if (isset($_POST['button'])) {
    $id = $_POST['id'];
    $product = $_POST['producted'];
    $heading = $_POST['headinged'];
    $date = $_POST['dataed'];
    $price = $_POST['priceed'];
    $kkal = $_POST['kkaled'];
    $sqrl = $_POST['sqrled'];
    $fat = $_POST['fated'];
    $carbs = $_POST['carbsed'];

    
    $uploadOk = 1; 
    $target_file = ""; 

    if (isset($_FILES["uploadfile"]) && $_FILES["uploadfile"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfile"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error = "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $error = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["uploadfile"]["size"] > 500000) {
            $error = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (!move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) {
                $error = "Sorry, there was an error uploading your file.";
                $uploadOk = 0;
            }
        }
    }

    
    if (!empty($product) && !empty($heading) && !empty($date) && !empty($price) && !empty($kkal) && !empty($sqrl) && !empty($fat) && !empty($carbs)) {
        if ($uploadOk == 1 && !empty($target_file)) {
           
            $sql = "UPDATE `breadcrum` SET `product_name`='$product', `heading`='$heading', `data`='$date', `img`='$target_file', `price`='$price', `kkal`='$kkal', `sqrl`='$sqrl', `fat`='$fat', `carbs`='$carbs' WHERE `id` = '$id'";
        } else {
           
            $sql = "UPDATE `breadcrum` SET `product_name`='$product', `heading`='$heading', `data`='$date', `price`='$price', `kkal`='$kkal', `sqrl`='$sqrl', `fat`='$fat', `carbs`='$carbs' WHERE `id` = '$id'";
        }

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success = "Data updated successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    } else {
        $error = "Please fill all the required fields.";
    }
}
?> 
