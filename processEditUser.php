<?php
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';

$id = $_GET['id'];
$name = $GET['name'];
$phone = $_GET['phone'];
$user = $_GET['user'];
$pass = $_GET['pass'];
$role = $_GET['role'];

$userID = $_SESSION['users_id'];
$role = $_SESSION['role'];

echo "user id " . $_SESSION['users_id'];
if ($connection && isset($_SESSION['users_id']) && $_SESSION['role'] == "admin") {
    $sql = "UPDATE `users` SET `name` = '$name', `phone` = '$phone', `username` = '$user', `password` = '$pass', `role` = '$role' WHERE `users`.`id` = '$id'";
    
    
    
    $result = mysqli_query($connection,$sql_statement);
    if ($result) {
        echo "number of rows affected = " . mysqli_affected_rows($connection);
        echo "<br>Data updated successfully!";
        echo "<br>Click <a href='showUserAdmin.php'>here</a> to return";
    }
    else {
        echo "Error in the sql " . mysqli_error($connection);
    }
}
else {
    echo "Error connecting " . mysqli_connect_error();
}
?>