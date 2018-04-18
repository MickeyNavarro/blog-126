<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="blogStyle.css">
<meta charset="UTF-8">
<title>Blog Users (Admin Page)</title>
</head>
<body>
<?php
session_start();
require_once 'connector_blog.php';
require_once 'menu.php';

if($_SESSION['role'] != "admin")
{
    echo "PLease login as an admin!";
}
?>
<div class="home">
<h2>Blog Users (Admin Page)</h2>

<?php
if ($conn)
{
    $sql = "SELECT * FROM `users`";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "User ID: " . $row ['id'] . "<br>";
            echo "User Full Name: " .$row ['name'] . "<br>";
            echo "User Phone Number: " .$row ['phone'] . "<br>";
            echo "Username: " .$row ['username'] . "<br>";
            echo "User Password: " .$row ['password'] . "<br>";
            echo "User Role: " .$row ['role'] . "<br>";
            ?>
            
            <form action = "processDeleteUser.php">
            <input type = "hidden" name = "id" value = "<?php echo $row ["id"]; ?>"></input>
            <button type = "submit">Delete</button>       
            </form>
                   
            <form action = "showEditForm.php">
            <input type = "hidden" name = "id" value = "<?php echo $row ["id"]; ?>"></input>
            <button type = "submit">Edit</button>       
            </form>
            
            <?php 
            echo "===============================================================================================================<br>";
        }
    }
    else
    {
        echo "There was an error" . mysqli_error($conn);
    }
}
else 
{
    echo "ERROR" . mysqli_connect_error();
    exit;
}

mysqli_close($conn);
?>
</div>
</div>