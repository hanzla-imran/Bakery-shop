<?php
include "../config/database.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `banno` WHERE id =$id";
$result = mysqli_query($conn, $sql);
$fetch= mysqli_fetch_assoc($result);
if($fetch['status'] == "Active"){
    $sql = "UPDATE `banno` SET `status`='Block' WHERE `banno`.`id`='$id'";
   $result = mysqli_query($conn, $sql);  
//    $row = mysqli_fetch_assoc($result);
//    var_dump($row['status']);
//    exit();
//    if ($row['status'] = "Active") {
    header('Location: ../views/admin/list.php');
    // $error = "Activated Successfully";
   }
// }
else{
    $sql = "UPDATE `banno` SET `status`='Active' WHERE `banno`.`id`='$id'";
   $result = mysqli_query($conn, $sql);
//    $row = mysqli_fetch_assoc($result);
//    $check  = $row['status'];
//    if ($row['status'] = "Active") {
    header('Location: ../views/admin/list.php');
    $error = "Activated Successfully";
//    }


  
}



?>