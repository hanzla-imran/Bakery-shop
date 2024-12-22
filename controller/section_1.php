<?php

if (isset($_POST['buttonn'])) {
    $id = $_POST['id'];

    if (empty($_POST['head'])) {
        $error =  "Sorry, file already exists.";
    } else {
        $heading = $_POST['head'];
    }
    if (empty($_POST['link'])) {
        $error =  "Sorry, file already exists.";
    } else {
        $link = $_POST['link'];
    }


    // $heading = $_POST['head'];

    $uploadOkIcon = 1;
    $uploadOkBackground = 1;


    if (isset($_FILES["uploadfilee"]) && $_FILES["uploadfilee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_im = $target_dir . basename($_FILES["uploadfilee"]["name"]);
        $target_file_img =  basename($_FILES["uploadfilee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_im, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfilee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkIcon = 0;
        }

        if (file_exists($target_file_im)) {
            $error = "Sorry, file already exists.";
            // echo "Sorry, file already exists.";
            $uploadOkIcon = 0;
        }

        if ($_FILES["uploadfilee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkIcon = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIcon = 0;
        }

        if ($uploadOkIcon == 1) {
            if (move_uploaded_file($_FILES["uploadfilee"]["tmp_name"], $target_file_im)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfilee"]["name"])) . " has been uploaded.";
                // $img_icon = $target_file; 
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (isset($_FILES["uploadfileee"]) && $_FILES["uploadfileee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_bg = $target_dir . basename($_FILES["uploadfileee"]["name"]);
        $target_file_img_bg =  basename($_FILES["uploadfileee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_bg, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfileee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file_bg)) {
            $error = "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uploadfileee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfileee"]["tmp_name"], $target_file_bg)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfileee"]["name"])) . " has been uploaded.";
                // $background_img = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }


    // if ($uploadOkIcon == 1 || $uploadOkBackground == 1) {
    if (!empty($heading) && !empty($link)) {
        if (!empty($target_file_img) && !empty($target_file_img_bg) && $uploadOkBackground == 1  && $uploadOkIcon == 1) {

            $sql = "UPDATE `section_1` SET `img_icon`='$target_file_im', `background_img`='$target_file_bg', `heading`='$heading', `link`  = '$link' WHERE `id` = '$id'";

            $result = mysqli_query($conn, $sql);
        } elseif (!empty($target_file_img)  && $uploadOkIcon == 1  && empty($target_file_img_bg)) {
            $sql = "UPDATE `section_1` SET `img_icon`='$target_file_im', `heading`='$heading', `link`  = '$link' WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);
        } elseif (empty($target_file_img) && $uploadOkBackground == 1  && !empty($target_file_img_bg)) {
            $sql = "UPDATE `section_1` SET  `background_img`='$target_file_bg', `heading`='$heading', `link`  = '$link' WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);
        } else {
            $sql = "UPDATE `section_1` SET  `heading`='$heading' ,`link`  = '$link' WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);
        }
        if ($result) {
            $success = "Data updated successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    }
}



if (isset($_POST['buttonnn'])) {
    $id = $_POST['id'];
    $uploadOkIcon = 1;
    $uploadOkBackground = 1;

    if (empty($_POST['head'])) {
        $error = "Heading cannot be empty.";
    } else {
        $heading = $_POST['head'];
    }
    if (empty($_POST['link'])) {
        $error =  "Sorry, file already exists.";
    } else {
        $link = $_POST['link'];
    }

    if (isset($_FILES["uploadfilee"]) && $_FILES["uploadfilee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_im = $target_dir . basename($_FILES["uploadfilee"]["name"]);
        $target_file_img = basename($_FILES["uploadfilee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_im, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfilee"]["tmp_name"]);
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

        if ($_FILES["uploadfilee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkIcon = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIcon = 0;
        }

        if ($uploadOkIcon == 1) {
            if (move_uploaded_file($_FILES["uploadfilee"]["tmp_name"], $target_file_im)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfilee"]["name"])) . " has been uploaded.";
                $img_icon = $target_file_im;
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $error = "Please upload an icon image.";
        $uploadOkIcon = 0;
    }

    if (isset($_FILES["uploadfileee"]) && $_FILES["uploadfileee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_bg = $target_dir . basename($_FILES["uploadfileee"]["name"]);
        $target_file_img_bg = basename($_FILES["uploadfileee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_bg, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfileee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file_bg)) {
            $error = "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uploadfileee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfileee"]["tmp_name"], $target_file_bg)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfileee"]["name"])) . " has been uploaded.";
                $background_img = $target_file_bg;
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $error = "Please upload a background image.";
        $uploadOkBackground = 0;
    }

    if (!empty($heading) && $uploadOkIcon == 1 && $uploadOkBackground == 1) {
        $sql = "INSERT INTO `section_1`(`img_icon`, `background_img`, `heading` , `link`) VALUES ('$img_icon','$background_img','$heading' , '$link')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $success = "Data inserted successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    } else {
        $error = "Please fill all required fields.";
    }
}


if (isset($_POST['btn_del'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `section_1` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = "Record Deleted successfully";
    } else {
        $error = "Error deleting record: " . mysqli_error($conn);
    }
}
