<?php


if (isset($_POST['buuttonn'])) {
    $id = $_POST['id'];
    $product = mysqli_real_escape_string($conn, $_POST['product']);
    $new = $_POST['new'];
    $old = $_POST['old'];
    $catagories = $_POST['catagories'];
    $sku = $_POST['sku'];
    $description = $_POST['description'];
    $availability = $_POST['availability'];

    $uploadOkIcon = 1;
    $uploadOkBackground = 1;


    if (isset($_FILES["upploadfilee"]) && $_FILES["upploadfilee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["upploadfilee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["upploadfilee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkIcon = 0;
        }

        if (file_exists($target_file)) {
            $error = "Sorry, file already exists.";
            $uploadOkIcon = 0;
        }

        if ($_FILES["upploadfilee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkIcon = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIcon = 0;
        }

        if ($uploadOkIcon == 1) {
            if (move_uploaded_file($_FILES["upploadfilee"]["tmp_name"], $target_file)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["upploadfilee"]["name"])) . " has been uploaded.";
                // $image = $target_file; 
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (isset($_FILES["uppploadfileee"]) && $_FILES["uppploadfileee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_hover = $target_dir . basename($_FILES["uppploadfileee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_hover, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uppploadfileee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file_hover)) {
            $error = "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uppploadfileee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uppploadfileee"]["tmp_name"], $target_file_hover)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uppploadfileee"]["name"])) . " has been uploaded.";
                // $hover = $target_file_hover; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (!empty($product) && !empty($new) && !empty($old)) {
        if (!empty($target_file) && !empty($target_file_hover) && $uploadOkIcon == 1 && $uploadOkBackground == 1) {
            $sql = "UPDATE `section_3` SET `image`='$target_file',`hover_img`='$target_file_hover',`product`='$product',`new_price`='$new',`old_price`='$old',`description`='$description',`sku`='$sku',`availability`='$availability',`catagories`='$catagories' WHERE `id` =  '$id'";
            $result = mysqli_query($conn, $sql);
        } elseif (!empty($target_file) &&  $uploadOkIcon == 1 && empty($target_file_hover)) {
            $sql = "UPDATE `section_3` SET `image`='$target_file', `product`='$product',`new_price`='$new',`old_price`='$old',`description`='$description',`sku`='$sku',`availability`='$availability',`catagories`='$catagories' WHERE `id` =  '$id'";
            $result = mysqli_query($conn, $sql);
        } elseif (!empty($target_file_hover) &&  $uploadOkBackground == 1 && empty($target_file)) {
            $sql = "UPDATE `section_3` SET `hover_img`='$target_file_hover', `product`='$product',`new_price`='$new',`old_price`='$old',`description`='$description',`sku`='$sku',`availability`='$availability',`catagories`='$catagories' WHERE `id` =  '$id'";
            $result = mysqli_query($conn, $sql);
        } else {
            $sql = "UPDATE `section_3` SET `product`='$product',`new_price`='$new',`old_price`='$old',`description`='$description',`sku`='$sku',`availability`='$availability',`catagories`='$catagories' WHERE `id` =  '$id'";
            $result = mysqli_query($conn, $sql);
        }
        if ($result) {
            $success = "Data updated successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    }
}





if (isset($_POST['buuttonne'])) {

    // $product = $_POST['product'];
    $product = mysqli_real_escape_string($conn, $_POST['product']);
    $new = $_POST['new'];
    $old = $_POST['old'];

    $uploadOkIcon = 1;
    $uploadOkBackground = 1;


    if (isset($_FILES["upploadfilee"]) && $_FILES["upploadfilee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_im = $target_dir . basename($_FILES["upploadfilee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_im, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["upploadfilee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkIcon = 0;
        }

        if (file_exists($target_file_im)) {
            $error = "Sorry, file already exists.";
            $uploadOkIcon = 0;
        }

        if ($_FILES["upploadfilee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkIcon = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIcon = 0;
        }

        if ($uploadOkIcon == 1) {
            if (move_uploaded_file($_FILES["upploadfilee"]["tmp_name"], $target_file_im)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["upploadfilee"]["name"])) . " has been uploaded.";
                // $image = $target_file; 
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (isset($_FILES["uppploadfileee"]) && $_FILES["uppploadfileee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_hover = $target_dir . basename($_FILES["uppploadfileee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_hover, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uppploadfileee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file_hover)) {
            $error = "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uppploadfileee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uppploadfileee"]["tmp_name"], $target_file_hover)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uppploadfileee"]["name"])) . " has been uploaded.";
                // $hover = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (!empty($product) && !empty($new) && !empty($old)) {
        if (!empty($target_file_hover) &&  !empty($target_file_im) && $uploadOkIcon == 1 && $uploadOkBackground == 1) {
            $sql = "INSERT INTO `section_3`(`image`, `hover_img`, `product`, `new_price`, `old_price`) VALUES ('$target_file_im','$target_file_hover','$product','$new','$old')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success = "Data inserted successfully";
            } else {
                $error = "Error inserting data: " . mysqli_error($conn);
            }
        } else {
            $error =  "Please fill in all fields";
        }
    } else {
        $error =  "Please fill in all fields";
    }
}



if (isset($_POST['del'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `section_3` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = "Record Deleted successfully";
    } else {
        $error = "Error deleting record: " . mysqli_error($conn);
    }
}
