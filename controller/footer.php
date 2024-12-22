<?php


if (isset($_POST['batton'])) {
    $id = $_POST['id'];
    $h_1 = $_POST['h_1'];
    $h_2 = $_POST['h_2'];
    $h_3 = $_POST['h_3'];
    $h_4 = $_POST['h_4'];
    $h_5 = $_POST['h_5'];
    $h_6 = $_POST['h_6'];
    $link = $_POST['link'];
    $data = $_POST['data'];
    $h_7 = $_POST['h_7'];
    $link_2 = $_POST['link_2'];
    $data_2 = $_POST['data_2'];
    $h_8 = $_POST['h_8'];
    $data_3 = $_POST['data_3'];
    $h_9 = $_POST['h_9'];
    $data_4 = $_POST['data_4'];
    $btn = $_POST['btn'];
    $link_3 = $_POST['link_3'];

    $uploadOkIcon = 1;
    $uploadOkBackground = 1;
    $uploadOkIconn = 1;
    $uploadOkBackgroundd = 1;


    if (isset($_FILES["uploadfilee"]) && $_FILES["uploadfilee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfilee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfilee"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
            $uploadOkIcon = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOkIcon = 0;
        }

        if ($_FILES["uploadfilee"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOkIcon = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIcon = 0;
        }

        if ($uploadOkIcon == 1) {
            if (move_uploaded_file($_FILES["uploadfilee"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["uploadfilee"]["name"])) . " has been uploaded.";
                $a = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (isset($_FILES["uploadfileee"]) && $_FILES["uploadfileee"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfileee"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfileee"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
            $uploadOkBackground = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOkBackground = 0;
        }

        if ($_FILES["uploadfileee"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOkBackground = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackground = 0;
        }

        if ($uploadOkBackground == 1) {
            if (move_uploaded_file($_FILES["uploadfileee"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["uploadfileee"]["name"])) . " has been uploaded.";
                $b = $target_file; // Store the file path to update the database
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }






    if (isset($_FILES["uploadfilee2"]) && $_FILES["uploadfilee2"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfilee2"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfilee2"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
            $uploadOkIconn = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOkIconn = 0;
        }

        if ($_FILES["uploadfilee2"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOkIconn = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkIconn = 0;
        }

        if ($uploadOkIconn == 1) {
            if (move_uploaded_file($_FILES["uploadfilee2"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["uploadfilee2"]["name"])) . " has been uploaded.";
                $c = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    if (isset($_FILES["uploadfileee2"]) && $_FILES["uploadfileee2"]['name'] != "") {
        $target_dir = "../../controller/upload/";
        $target_file = $target_dir . basename($_FILES["uploadfileee2"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["uploadfileee2"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
            $uploadOkBackgroundd = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOkBackgroundd = 0;
        }

        if ($_FILES["uploadfileee2"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOkBackgroundd = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOkBackgroundd = 0;
        }

        if ($uploadOkBackgroundd == 1) {
            if (move_uploaded_file($_FILES["uploadfileee2"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["uploadfileee2"]["name"])) . " has been uploaded.";
                $d = $target_file; // Store the file path to update the database
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (!empty($h_1) && !empty($h_2) && !empty($h_3) && !empty($h_4) && !empty($h_5) && !empty($h_6) && !empty($link) && !empty($data) && !empty($h_7) &&  !empty($link_2) && !empty($data_2) && !empty($h_8) &&  !empty($data_3) && !empty($h_9) && !empty($data_4) && !empty($btn) && !empty($link_3)) {
        if ($uploadOkIcon == 1 || $uploadOkBackground == 1 || $uploadOkIconn == 1 || $uploadOkBackgroundd == 1) {
            $sql = "UPDATE `footer_headinds` SET `h_1`='$h_1',`h_2`='$h_2',`h_3`='$h_3',`h_4`='$h_4',`h_5`='$h_5',`h_6`='$h_6',`link`='$link',`data`='$data',`h_7`='$h_7',`link_2`='$link_2',`data_2`='$data_2',`h_8`='$h_8',`data_3`='$data_3',`h_9`='$h_9',`data_4`='$data_4',`btn`='$btn',`link_3`='$link_3',`img_1`='$a',`img_2`='$b',`img_3`='$c',`img_4`='$d' WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Data updated successfully";
            } else {
                echo "Error updating data: " . mysqli_error($conn);
            }
        }
    }
}


// footer heading list 1


if (isset($_POST['baattone'])) {
    $x = $_POST['l'];
    $y = $_POST['hh'];
    if (!empty($x)  && !empty($y)) {
        $sql = "INSERT INTO `footer_list1`(`link`, `heading`) VALUES ('$x','$y')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data inserted successfully";
        } else {
            $error  = "Error inserting data";
        }
    }
}

// update

if (isset($_POST['baatton'])) {
    $id = $_POST['id'];
    $x = $_POST['l'];
    $y = $_POST['hh'];
    if (!empty($x)  && !empty($y)) {
        $sql = "UPDATE `footer_list1` SET `link`='$x',`heading`='$y' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data updated successfully";
        } else {
            $error  = "Error updating data";
        }
    }
}

// delete

if (isset($_POST['del'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `footer_list1` WHERE `id`  = '$id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success  = "Data deleted successfully";
    } else {
        $error  = "Error deleting data";
    }
}


// social media list


// insert

if (isset($_POST['be'])) {
    $x = $_POST['ll'];
    $y = $_POST['hhh'];
    if (!empty($x)  && !empty($y)) {
        $sql = "INSERT INTO `footer_list2`(`link`, `heading`) VALUES ('$x','$y')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data inserted successfully";
        } else {
            $error  = "Error inserting data";
        }
    }
}


// update

if (isset($_POST['bn'])) {
    $id = $_POST['id'];
    $x = $_POST['ll'];
    $y = $_POST['hhh'];
    if (!empty($x)  && !empty($y)) {
        $sql = "UPDATE `footer_list2` SET `link`='$x',`heading`='$y' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data updated successfully";
        } else {
            $error  = "Error updating data";
        }
    }
}

if (isset($_POST['dhl'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `footer_list2` WHERE `id`  = '$id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success  = "Data deleted successfully";
    } else {
        $error  = "Error deleting data";
    }
}



// catagories list


// insert

if (isset($_POST['bnnn'])) {
    $x = $_POST['ll'];
    $y = $_POST['hhh'];

    if (!empty($x)  && !empty($y)) {
        $sql = "INSERT INTO `footer_list3` (`link`, `heading`) VALUES ('$x','$y')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data inserted successfully";
        } else {
            $error  = "Error inserting data";
        }
    }
}




// update


if (isset($_POST['bnn'])) {
    $id = $_POST['id'];
    $x = $_POST['ll'];
    $y = $_POST['hhh'];
    if (!empty($x)  && !empty($y)) {

        $sql = "UPDATE `footer_list3` SET `link`='$x',`heading`='$y' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data updated successfully";
        } else {
            $error  = "Error updating data";
        }
    }
}


// delete

if (isset($_POST['dll'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `footer_list3` WHERE `id`  = '$id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success  = "Data deleted successfully";
    } else {
        $error  = "Error deleting data";
    }
}



// costmer care  list

// insert

if (isset($_POST['bee'])) {
    $x = $_POST['ll'];
    $y = $_POST['hhh'];
    if (!empty($x)  && !empty($y)) {

        $sql = "INSERT INTO `footer_list4` (`link`, `heading`) VALUES ('$x','$y')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data inserted successfully";
        } else {
            $error  = "Error inserting data";
        }
    }
}




// update


if (isset($_POST['ee'])) {
    $id = $_POST['id'];
    $x = $_POST['ll'];
    $y = $_POST['hhh'];
    if (!empty($x)  && !empty($y)) {
        $sql = "UPDATE `footer_list4` SET `link`='$x',`heading`='$y' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success  = "Data updated successfully";
        } else {
            $error  = "Error updating data";
        }
    }
}

// delete

if (isset($_POST['dee'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `footer_list4` WHERE `id`  = '$id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success  = "Data deleted successfully";
    } else {
        $error  = "Error deleting data";
    }
}
