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
                header("Location: http://banno/views/admin/admin.php");
                $success =  "Registration successful";
                exit();
            } else {
                $error = "There was an error registering the user";
            }
        }
    } else {
       
   $error = "Please fill the form correctly";
    }
}


if (isset($_POST['dell'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `banno` WHERE `id` = '$id'";

    $result = mysqli_query($conn , $sql);

    if ($result) {
        $success = "Data deleted successfully";
    } else {
        $error = "Error delete data: " . mysqli_error($conn);
    }

}

?>
