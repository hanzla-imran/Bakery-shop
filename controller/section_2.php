<?php
if (isset($_POST['buttonn'])) {
    $id = $_POST['id'];
    if (empty($_POST['title'])) {
        $error = "please enter the Title";
    } else {
        $title = $_POST['title'];
    }
    if (empty($_POST['shead'])) {
        $error = "please enter the heading";
    } else {
        $headin = $_POST['shead'];
    }

    if (empty($_POST['btn_link'])) {
        $error = "please enter the Link";
    } else {
        $btn_link = $_POST['btn_link'];
    }
    if (empty($_POST['btn_name'])) {
        $error = "please enter the button name";
    } else {
        $btn_name = $_POST['btn_name'];
    }




    // $title = $_POST['title'];
    // $headin = $_POST['shead'];
    // $btn_link = $_POST['btn_link'];
    // $btn_name = $_POST['btn_name'];


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
                // $background = $target_file; // Store the file path to update the database
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // if(!empty($target_file_img) && !empty($target_file_img_bg) && $uploadOkBackground == 1  && $uploadOkIcon == 1 ){
    
    if ( !empty($title) && !empty($headin) && !empty($btn_link) && !empty($btn_name) ) {
        if (!empty($target_file) && $uploadOkBackground == 1) {
            $sql = "UPDATE `section_2` SET `section_2img`='$target_file',`title`='$title',`heading`='$headin',`btn_link`='$btn_link',`btn_name`='$btn_name' WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $success = "Data updated successfully";
            } else {
                $error = "Error updating data: " . mysqli_error($conn);
            }
        }
        else {
          $sql = "UPDATE `section_2` SET `title`='$title',`heading`='$headin',`btn_link`='$btn_link',`btn_name`='$btn_name' WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $success = "Data updated successfully";
            } else {
                $error = "Error updating data: " . mysqli_error($conn);
            }
        }

    }
else {
    $error = "Please fill all the fields";
}

}



// Section 2 List


if (isset($_POST['buttonne'])) {
    $li = $_POST['li'];
    if (!empty($li)) {
        $sql = "INSERT INTO `section_2_li` (`li`) VALUES ('$li')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success = "Data inserted successfully";
    } else {
        $error = "Error inserting data: " . mysqli_error($conn);
    }
    }
    else{
        $error = "Please fill all required fields.";
    }
   
}
if (isset($_POST['buuttonne'])) {
    $id = $_POST['id'];
    $li = $_POST['li'];
    if (!empty($li)) {
        $sql = "UPDATE `section_2_li` SET `li`='$li' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success = "Data inserted successfully";
    } else {
        $error = "Error inserting data: " . mysqli_error($conn);
    }
    }
    else{
        $error = "Please fill all required fields."; 
    }
   
}
if (isset($_POST['del'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `section_2_li` WHERE `id`  = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = "Data inserted successfully";
    } else {
        $error = "Error inserting data: " . mysqli_error($conn);
    }
}
