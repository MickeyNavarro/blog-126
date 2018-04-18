<?php
session_start();
require_once 'menu.php';
require_once 'connector_blog.php';
?>
<?php 
$blogName = $_GET['blogName'];
$blogComment = $_GET['blogComment'];


if ($conn) {
    
    $sql_statement = "SELECT `blog_title`, `blog_post` FROM `posts` WHERE `blog_title` LIKE '%$blogName%' AND `blog_post` LIKE '%$blogComment%'";
    
    $result = mysqli_query($conn, $sql_statement);
    ?>
    <div class="post">
    <?php
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Title: " . $row["blog_title"] . "<br>";
            echo $row["blog_post"] . "<br>";
            echo "===============<br>";
        }
    }
    else {
        echo "There was a problem " . mysqli_error($conn);
    }
}
else {
    echo "ERROR" . mysqli_connect_error();
    exit;
}
mysqli_close($conn);
?>
</div>