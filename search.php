<?php 
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';
?>
<title>Search Blog</title>
 <div class="home">

<h2>Search for a post</h2>
<p>Fill out any of these fields and search</p>
<form action="searchPost.php">
Blog Title:<input type="text" name="blogName"></input><br>
Blog Post:<input type="text" name="blogComment"></input><br>
<button type="submit">Search</button>
</form>
</div>