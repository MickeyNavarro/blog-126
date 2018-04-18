<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Blog Posts (Admin Page)</title>
</head>
<body>
<?php
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';

if ($_SESSION['role'] != 'admin') {
    echo "Please login as an admin";
    exit;
} 
?>
<div class="home">
<h2>Blog Posts (Admin Page)</h2>
<div class="display">

<?php
if ($conn) {
        
    $sql_statement = "SELECT * FROM `posts`";
    
    $result = mysqli_query($conn, $sql_statement);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["blog_title"] . "<br>";
            echo $row["blog_post"] . "<br>";
            ?>
            
            <form action = "deleteItem.php">
            <input type = "hidden" name = "id" value = "<?php echo $row['id'];?>"></input>
            <button type = "submit">Delete</button>
            
            </form>
            
             <form action = "editForm.php">
            <input type = "hidden" name = "id" value = "<?php echo $row['id'];?>"></input>
            <button type = "submit">Edit</button>
            
            </form>
            <?php 
            echo "===============================================================================================================<br>";
        }
    }
    else {
        echo "There was a problem " . mysqli_error($conn);
    }
}
else {
    echo "ERROR" . mysqli_connect_error();
   
}
mysqli_close($conn);
?>
</div>
</div>

</body>
</html>