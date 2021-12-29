<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    

    $insert_blog_title = "INSERT INTO blog_title (category, title, description)
                      VALUES('$category', '$title', '$description')";
    $insert_blog_title_result = mysqli_query($dbconnect, $insert_blog_title);

    $_SESSION['success_t'] = 'Blog Title Added Success';
    header('location:add_blog.php');

?>