<?php
if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $headi = $_POST['headi'];
    


    $uploadOkBackground = 1;

    if (isset($_FILES["uploadfileee"]) && $_FILES["uploadfileee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfileee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfileee"]["tmp_name"]);
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

        if ($_FILES["uploadfileee"]["size"] > 2000000) {
            $error = "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfileee"]["tmp_name"], $target_file)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfileee"]["name"])) . " has been uploaded.";
                // $banner = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

if (!empty($headi)) {

    if ( !empty($target_file) && $uploadOkBackground == 1) {
        $sql = "UPDATE `section_4_p1` SET `heading`='$headi',`banner`='$target_file' WHERE `id` =  '$id'";

        $result = mysqli_query($conn, $sql);
 
    }
    else {
        $sql = "UPDATE `section_4_p1` SET `heading`='$headi' WHERE `id` =  '$id'";

        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
        $success = "Data updated successfully";
    } else {
        $error = "Error updating data: " . mysqli_error($conn);
    }
}
   
}




// section_4_pt2

// update

if (isset($_POST['btnn'])) {
    $id = $_POST['id'];
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $identity = $_POST['identity'];


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
                // $profile = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

if (!empty($comments) &&  !empty($name) && !empty($identity)) {

    if ( !empty($target_file) && $uploadOkBackground == 1) {
        $sql = "UPDATE `section_4_p2` SET `profile`='$target_file',`comments`='$comments',`name`='$name',`identity`='$identity' WHERE `id` =  '$id'";
        $result = mysqli_query($conn, $sql);
    }
    else {
        $sql = "UPDATE `section_4_p2` SET `comments`='$comments',`name`='$name',`identity`='$identity' WHERE `id` =  '$id'";
        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
        $success = "Data updated successfully";
    } else {
        $error = "Error updating data: " . mysqli_error($conn);
    }
}
else{
    $error = "Please fill in all fields.";
}
   
}


// insert


if (isset($_POST['bttnn'])) {
    
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $identity = $_POST['identity'];


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
                // $profile = $target_file; // Store the file path to update the database
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (!empty($comments) &&  !empty($name) && !empty($identity)) {
        if (!empty($target_file)  && $uploadOkBackground == 1) {

            $sql = "INSERT INTO `section_4_p2`(`profile`, `comments`, `name`, `identity`) VALUES ('$target_file','$comments','$name','$identity')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $success = "Data inserted successfully";
            } else {
                $error = "Error updating data: " . mysqli_error($conn);
            }
        }
        else {
            $error =  "Please upload a file.";

        }

    }
    else {
        $error = "Please fill in all fields.";
    }

    
}


// delete


if (isset($_POST['dell'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `section_4_p2` WHERE `id` = '$id'";

    $result = mysqli_query($conn , $sql);

    if ($result) {
        $success = "Data deleted successfully";
    } else {
        $error = "Error delete data: " . mysqli_error($conn);
    }

}


?>