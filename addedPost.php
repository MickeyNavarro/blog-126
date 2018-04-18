<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Add a blog post</title>
</head>
<style>
.box{
    font-size: 15px;
}

</style>
<body>
<?php 
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';
?>
<div class="post">
<h2>Add a blog post</h2>
<p>Fill out all of the fields and submit</p>
<form action="addPost.php">
    Post Title:<br><textarea class="box" rows="2" cols="40" name="postTitle"></textarea><br>
    Post Body:<br><textarea class="box" rows="10" cols="100" name="postBody"></textarea><br>
    <button type="Submit">Post!</button>
</form>


</body>
</div>
</html>