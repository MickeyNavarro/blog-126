<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="blogStyle.css">
<meta charset="UTF-8">
<title>Deleted Blog Post</title>
</head>
<body>

<div class="home">
<h2>Deleted Blog Posts</h2>
<p>Click <a href=admin.php>here</a> to go back to admin page </p>
<div class="display">
<?php
require_once 'topMenu.php';
require_once 'connector_blog.php';

$itemToDelete = $_GET['id'];

$sql_statement = "DELETE FROM `posts` WHERE `posts`.`id` = '$itemToDelete'";

if ($conn) {
    $result = mysqli_query($conn, $sql_statement);
        if ($result) {
        echo "Deleted item " . $itemToDelete . "<br>";
        } else {
            echo "Error with the SQL " . mysqli_error($conn);
        }
} else {
    echo "Error connecting " . mysqli_connect_error();
}
            ?>
            