<?php

if (isset($_POST['buttonn'])) {

    if (empty($_POST['email'])) {
        $emaile = "Enter your email";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['password'])) {
        $passworde = "Enter your password";
    } else {
        $password = $_POST['password'];
    }

    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM `banno` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row && password_verify($password, $row['password'])) {
                $_SESSION['banno'] = $row;
                if ($_SESSION['banno']['status'] == "Active") {
                    if ($row['roll'] == "Admin") {
                //         var_dump($row);
                 
                // echo "error";
                // exit();
                        header("Location: ../views/admin/admin.php");
                        exit();
                    } else  {
                        header("Location: ../index2.php");
                        exit();
                    }
                } else {
                    $error = "your account is temporary blocked";
                }
            } else {
                $error = "Invalid email or password";
            }
        } else {
            $error = "Error: Unable to query the database";
        }
    } else {
        $error = "Please enter both email and password";
    }
}

?>