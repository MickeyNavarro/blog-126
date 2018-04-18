<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Blog Posts</title>
</head>
<style>
a:link{
    color: white;
}
a:visited{
    color: #DAB3FF;
}
a:hover{
    color: silver;
}
a:active{
    color: black;
}
h2{
    font-size: 60px;
}
</style>
<body>
<?php
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';
?>
<div class="post">
<h2>Blog Posts</h2>
<div class="links">
<?php 
$user_id = $_SESSION['userid'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT `id`, `blog_title`, `blog_post`, `users_id` FROM `posts` WHERE `users_ID` = '$user_id'";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="individualPost.php?id='.$row["id"].'">'.$row ["blog_title"].'</a>';
            echo "<br>";
        } 
?>

</div>
</div>

</body>
</html>
