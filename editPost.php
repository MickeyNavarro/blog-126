<?php
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';

$blogName = $_GET['blogTitle'];
$blogPost = $_GET['blogPost'];
$id = $_GET['id'];
$userID = $_SESSION['userid'];
$role = $_SESSION['role'];
?>
<div class= "home"></div>
<? 
echo "user id " . $_SESSION['userid'];
if ($conn && isset($_SESSION['userid']) && $role = "admin") {
    $sql_statement = "UPDATE `posts` SET `blog_title` = '$blogName', `blog_post` = '$blogPost' WHERE `id` = '$id'";
    
    
    
    $result = mysqli_query($conn,$sql_statement);
    if ($result) {
        echo "number of rows affected = " . mysqli_affected_rows($conn);
        echo "<br>Data updated successfully!";
        echo "<br>Click <a href='index.php'>here</a> to return";
    }
    else {
        echo "Error in the sql " . mysqli_error($conn);
    }
}
else {
    echo "Error connecting " . mysqli_connect_error();
}
?>