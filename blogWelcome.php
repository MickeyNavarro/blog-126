<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Welcome</title>
</head>
<style>

p{
    font-size: 30px;
    color: white;
    font-family: arial;
}
</style>
<body>
<?php 
session_start();
require_once 'index.php';
require_once 'connector_blog.php';
?>
<div class="intro">
<p>Welcome to our travel blog! Follow along as people from different places share their experience traveling the world!</p>
</div>

</body>
</html>