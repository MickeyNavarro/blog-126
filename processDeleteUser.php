<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Deleted Blog Post</title>
</head>
<body>
<?php
session_start();
require_once 'connector_blog.php';
require_once 'menu.php';
?>
<div class="home">
<h2>Deleted Blog Post</h2>
<p>Click <a href=showUserAdmin.php>here</a> to go back to admin page </p>
<div class="display">
<?php
$userToDelete = $_GET['id'];

$userid = $_SESSION['users_id'];
$user_role = $_SESSION['role'];

if ($conn)
{
    $sql = "DELETE FROM `users` WHERE `users`.`id` = '$userToDelete'";
    $result = mysqli_query($conn, $sql);
    if ($result && isset($_SESSION['users_id']) && $role = "admin")
    {
        echo "User deleted: " . $userToDelete . "<br>";
    }
    else 
    {
        echo "<br>There was a problem " . mysqli_error($conn);
    }
}
else {
    echo "ERROR" . mysqli_connect_error();
    exit;
}
mysqli_close($conn);
?>
</div>
</div>

</body>
</html>