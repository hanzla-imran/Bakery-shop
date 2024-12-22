<?php

if (isset($_POST['bne'])) {
    $icone = mysqli_real_escape_string($conn, $_POST['icon']);
    $hedny = $_POST['hedng'];
    $lnk = $_POST['lnk'];


    if (!empty($icone)  && !empty($hedny) && !empty($lnk)) {

        $sql = "INSERT INTO `section_5`(`icon`, `heading`, `link`) VALUES ('$icone','$hedny','$lnk')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success = "Data inserted successfully";
        } else {
            $error = "Error updating data: " . mysqli_error($conn);
        }  
    }
    else {
        $error = "Please fill all fields";
    }
 
}

if (isset($_POST['bttn'])) {
    $id = $_POST['id'];
    $icone = mysqli_real_escape_string($conn, $_POST['icon']);
    $hedny = $_POST['hedng'];
    $lnk = $_POST['lnk'];
    if (!empty($icone)  && !empty($hedny) && !empty($lnk)) {
        $sql = "UPDATE `section_5` SET `icon`='$icone',`heading`='$hedny', `link`='$lnk' WHERE `id` =  '$id'";

        $result = mysqli_query($conn, $sql);
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
if (isset($_POST['deel'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `section_5` WHERE `id`  = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = "Data delete successfully";
    } else {
        $error = "Error updating data: " . mysqli_error($conn);
    }
}
