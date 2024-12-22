<?php


if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    
    $ttl = $_POST['ttl'];
    $hed = $_POST['hed'];

    if (!empty($ttl) &&  !empty($hed)) {

        $sql = "UPDATE `section_6_p1` SET `title`='$ttl',`headi`='$hed' WHERE `id` =  '$id'";


        $result = mysqli_query($conn , $sql);
        if ($result) {
            $success = "Data updated successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    }
    else {
        $error =  "Please fill all fields";
    }
    
}


// section_6_p2

// update

if (isset($_POST['btnn'])) {
    $id = $_POST['id'];
    
    $date = $_POST['a'];
    $month = $_POST['b'];
    $link = $_POST['c'];
    $icon = $_POST['d'];
    $blog = $_POST['e'];


    $uploadOkBackground = 1;

    if (isset($_FILES["uploadfleee"]) && $_FILES["uploadfleee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfleee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfleee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file)) {
            $error = "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uploadfleee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfleee"]["tmp_name"], $target_file)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfleee"]["name"])) . " has been uploaded.";
                // $blog_img = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (!empty($date) && !empty($month) && !empty($link) &&!empty($icon) &&!empty($blog)) {
        if (!empty($target_file) && $uploadOkBackground == 1) {
            $sql = "UPDATE `section_6_p2` SET `datee`='$date',`month`='$month',`link`='$link',`blog_img`='$target_file',`icon`='$icon',`bog_title`='$blog' WHERE `id` =  '$id'";
            $result = mysqli_query($conn, $sql);
        }
        else {
            $sql = "UPDATE `section_6_p2` SET `datee`='$date',`month`='$month',`link`='$link' ,`icon`='$icon',`bog_title`='$blog' WHERE `id` =  '$id'";
            $result = mysqli_query($conn, $sql);
        }
        if ($result) {
            $success = "Data updated successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    }
    else {
        $error =  "Please fill all the fields";

    }

   
}


// insert 

if (isset($_POST['batnn'])) {
    $date = $_POST['a'];
    $month = $_POST['b'];
    $link = $_POST['c'];
    $icon = $_POST['d'];
    $blog = $_POST['e'];


    $uploadOkBackground = 1;

    if (isset($_FILES["uploadfleee"]) && $_FILES["uploadfleee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfleee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfleee"]["tmp_name"]);
        if ($check !== false) {
            $success = "File is an image - " . $check["mime"] . ".";
        } else {
            $error = "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file)) {
            $error = "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uploadfleee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfleee"]["tmp_name"], $target_file)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfleee"]["name"])) . " has been uploaded.";
                // $blog_img = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (!empty($date) && !empty($month) && !empty($link) &&!empty($blog_img) &&!empty($icon) &&!empty($blog) ) {
        if (!empty($target_file) && $uploadOkBackground == 1) {
            $sql = "INSERT INTO `section_6_p2`(`datee`, `month`, `link`, `blog_img`, `icon`, `bog_title`) VALUES ('$date','$month','$link','$target_file','$icon','$blog')";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $success = "Data inserted successfully";
            } else {
                $error = "Error inserting data: " . mysqli_error($conn);
            }
        }
        else {
            $error =  "Please fill all fields";
        }
    }
    else {
        $error =  "Please fill all fields";
    }

  
}



// delete


if (isset($_POST['dal'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `section_6_p2` WHERE `id`  = '$id'";

    $result = mysqli_query($conn , $sql);
    if ($result) {
        $success = "Data deleted successfully";
    } else {
        $error = "Error deleting data: " . mysqli_error($conn);
    }
}
?>