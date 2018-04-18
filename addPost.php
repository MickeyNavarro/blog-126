<?php
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';

$postTitle = $_GET['postTitle'];
$postBody = $_GET['postBody'];
$user_id = $_SESSION['userid'];
?>
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
</style>
<div class = "home">
<?php 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   
    
$sql_statement = "INSERT INTO `posts`(`blog_title`, `blog_post`, `users_id`) VALUES ('$postTitle', '$postBody', '$user_id')";
$result = mysqli_query($conn, $sql_statement);
?>
<?php 
if ($result) {
    echo "Success! You have created a new blog post!<br>";
    echo "Click <a href=blogPosts.php>here</a> to view your post!<br>"; 
}
else {
    echo "There was a problem " . mysqli_error($conn);
}

?>
</div>