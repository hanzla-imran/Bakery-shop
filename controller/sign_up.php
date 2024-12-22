<?php
$name = $last_name = $email = $password = $hpassword = $image = "";
$namee = $lnamee = $emaile = $passworde = $passwordee = $imageerror = $x = "";
$uploadok = 0;
$login = false;
if (isset($_POST['button'])) {

    $namee = $lnamee = $emaile = $passworde = $passwordee = '';


    if (empty($_POST['first-name'])) {
        $namee = "Enter your name";
    } else {
        $name = $_POST['first-name'];
    }



    if (empty($_POST['last-name'])) {
        $lnamee = "Enter your last name";
    } else {
        $last_name = $_POST['last-name'];
    }


    if (empty($_POST['email'])) {
        $emaile = "Enter your email";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) {
        $phon = "Enter your phone number";
    } else {
        $phone = $_POST['phone'];
    }



    if (empty($_POST['password'])) {
        $passworde = "Enter your password";
    } else {
        $password = $_POST['password'];
    }



    if (empty($_POST['confirm-password'])) {
        $passwordee = "Confirm your password";
    } else {
        $cpassword = $_POST['confirm-password'];

        if ($password !== $cpassword) {
            $passwordee = "Passwords do not match";
        }
    }


    if (!empty($name) && !empty($last_name) && !empty($email) && !empty($password) && $password === $cpassword) {

        $hpassword = password_hash($password, PASSWORD_DEFAULT);


        $exist_sql = "SELECT * FROM `banno` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $exist_sql);

        $exist_num = mysqli_num_rows($result);

        if ($exist_num > 0) {
            $emaile = "This email already exists";
        } else {
            $sql = "INSERT INTO `banno` (`name`, `last_name`, `phone`, `email`, `password`) VALUES ('$name', '$last_name','$phone', '$email', '$hpassword')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: login.php");
                exit();
            } else {
                $error = "There was an error registering the user";
            }
        }
    } else {

        $error = "Please fill the form correctly";
    }
}



// update

if (isset($_POST['buton'])) {

    if (empty($_POST['first-name'])) {
        $namee = "Enter your name";
    } else {
        $name = $_POST['first-name'];
    }

    if (empty($_POST['last-name'])) {
        $lnamee = "Enter your last name";
    } else {
        $last_name = $_POST['last-name'];
    }

    if (empty($_POST['phone'])) {
        $phon = "Enter your phone number";
    } else {
        $phone = $_POST['phone'];
    }



    if (isset($_FILES["uploadfile"]) && $_FILES["uploadfile"]['name'] != "") {
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["uploadfile"]['name']);
        $uploadok = 1;
        $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        // Check if file is an actual image
        $check = getimagesize($_FILES["uploadfile"]["tmp_name"]);
        if ($check !== false) {
            // Check if file already exists
            if (file_exists($target_file)) {
                $imageerror = "Image already exists";
                $uploadok = 0;
            }
    
            // Check file size (limit: 5MB)
            if ($_FILES["uploadfile"]['size'] > 5000000) {
                $imageerror = "Image is too large";
                $uploadok = 0;
            }
    
            // Allow certain file formats
            if (!in_array($imagefiletype, ["png", "jpeg", "jpg", "gif"])) {
                $imageerror = "Sorry, only PNG, JPEG, JPG, and GIF files are allowed";
                $uploadok = 0;
            }
    
            // Check if everything is okay before uploading
            if ($uploadok == 1) {
                // Attempt to upload the file
                if (move_uploaded_file($_FILES["uploadfile"]['tmp_name'], $target_file)) {
                    $image = $target_file;
                } else {
                    $imageerror = "Sorry, there was an error uploading your file";
                    $uploadok = 0;
                }
            }
        } else {
            $imageerror = "File is not an image";
            $uploadok = 0;
        }
    } else {
        $imageerror = "Upload is required";
    }
    
    // Check for form validation and image upload success
    if (!empty($name) && !empty($last_name) && $uploadok == 1) {
        // Sanitize inputs (to prevent SQL injection)
        $name = mysqli_real_escape_string($conn, $name);
        $last_name = mysqli_real_escape_string($conn, $last_name);
        $phone = mysqli_real_escape_string($conn, $phone);
        $id = mysqli_real_escape_string($conn, $id);
    
        // Update the database
        $sql = "UPDATE `banno` SET `name`='$name', `last_name`='$last_name', `phone`='$phone', `image`='$image' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            header("Location: http://banno/views/admin/admin.php");
            exit(); // Always exit after header redirection
        } else {
            // Capture and display SQL error
            $x = "There was an error updating the user: " . mysqli_error($conn);
            echo $x;
        }
    } else {
        // Display error messages
        echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '" . (!empty($imageerror) ? $imageerror : "Please fill in the form") . "'
            });
        };
        </script>";
    }
    
}





if (isset($_POST['dell'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `banno` WHERE `id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = "Data deleted successfully";
    } else {
        $error = "Error delete data: " . mysqli_error($conn);
    }
}

