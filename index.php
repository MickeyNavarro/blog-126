<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "Please login first <a href='login.html'> here </a>";
    exit;
}

if (isset($_GET['pageNumber']))
    $blogPost = $_GET['pageNumber'];
    else
        $blogPost = 4;
        
        if ( $_SESSION['username']) {
            require_once 'menu.php';
            
            switch ($blogPost) {
                case 1:
                    require_once 'search.php';
                    break;
                case 2:
                    require_once 'blogPosts.php';
                    break;
                case 3:
                    require_once 'addedPost.php';
                    break;
                case 4:
                    require_once 'blogWelcome.php';
                    break;
            }
        }
        else {
            echo "<h1>Blog Posts</h1>";
            echo "Please login first <a href='login.html'>Login here</a>";
            exit;
        }
        
        ?>