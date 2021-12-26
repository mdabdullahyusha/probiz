<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $insert_newsletter = "INSERT INTO newsletter (category, title, description)
                        VALUES('$category', '$title', '$description')";
    $insert_newsletter_result = mysqli_query($dbconnect, $insert_newsletter);

    $_SESSION['success'] = 'Contact Now Added Success';
    header('location:add_newsletter.php');
        


?>