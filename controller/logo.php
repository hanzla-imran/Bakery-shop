
<?php
if (isset($_POST['bxn'])) {
    $id = $_POST['id'];
    $uploadOkIcon = 1;
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
            $error ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfileee"]["tmp_name"], $target_file)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["uploadfileee"]["name"])) . " has been uploaded.";
                // $backg = $target_file; 
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (isset($_FILES["upldfilee"]) && $_FILES["upldfilee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file_im = $target_dir . basename($_FILES["upldfilee"]["name"]);
        $target_file_img =  basename($_FILES["upldfilee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_im, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["upldfilee"]["tmp_name"]);
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

        if ($_FILES["upldfilee"]["size"] > 2000000) { 
            $error = "Sorry, your file is too large.";
            $uploadOkIcon = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIcon = 0;
        }

        if ($uploadOkIcon == 1) {
            if (move_uploaded_file($_FILES["upldfilee"]["tmp_name"], $target_file_im)) {
                $success = "The file " . htmlspecialchars(basename($_FILES["upldfilee"]["name"])) . " has been uploaded.";
                // $img_icon = $target_file; 
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }



    if ( !empty($target_file_im) && !empty($target_file)  && $uploadOkIcon == 1 && $uploadOkBackground == 1) {
        $sql = "UPDATE `website_logo` SET `logo`='$target_file',`logo_2`='$target_file_im' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
    }
    elseif(!empty($target_file) && empty($target_file_im)  &&  $uploadOkBackground == 1 ){
        $sql = "UPDATE `website_logo` SET `logo`='$target_file' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
    }
    elseif(!empty($target_file_im) && empty($target_file)  && $uploadOkIcon == 1){
        $sql = "UPDATE `website_logo` SET `logo_2`='$target_file_im' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
    }
    else {
        $error = "Please upload a logo and a background image.";
    }
        if ($result) {
            $success = "Data updated successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }
    
}
?>