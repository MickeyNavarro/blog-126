<html>
<head>
<title>Travel Blog</title>
<meta charset="UTF-8">
<meta name= "viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">

</head>
<body>
<header>
<div>
<ul class="main-nav">
<?php
if (!isset($_SESSION['username'])):
?>
<li class="active"><a href="login.html">Login</a></li>
<?php else: ?>
<li class="welcome-name">Welcome <?php echo $_SESSION['username']; ?>! </li> 
<?php endif; ?>
<li class="active"><a href="index.php?pageNumber=1">Search</a> </li> <li class="blog-item"><a href="index.php?pageNumber=2">Blog Posts</a> </li>  <li class="blog-item"><a href="index.php?pageNumber=3">Add New Post</a></li>

<?php if ( $_SESSION['role'] == 'admin'):?>
<li><a href="admin.php">Content Admin</a></li><li><a href="showUserAdmin.php">Users Admin</a></li>
<?php endif; ?>
<li class="active"><a href="logout.php">Logout</a></li>

	





</ul>

</div>

</header>
</body>
</html>
