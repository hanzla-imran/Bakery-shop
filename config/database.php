<?php

ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$servername = 'localhost';
$username = 'root';
$dbpassword = 'root';
$database = 'my_project';

$conn = new mysqli($servername, $username, $dbpassword, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
@$userid = $_SESSION['banno']['id'];


// $site_url ='http://project/' ;
?>

