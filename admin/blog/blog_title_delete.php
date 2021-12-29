<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_blog_title = "DELETE FROM blog_title WHERE id = '$id'";
    $delete_blog_title_result = mysqli_query($dbconnect, $delete_blog_title);
    
    $_SESSION['delete_team_title'] = 'Blog Title Deleted Success';
    header('location:view_blog.php');
?>