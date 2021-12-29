<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $insert_about = "INSERT INTO pricing_title (category, title, description)
                VALUES('$category', '$title', '$description')";
    $insert_about_result = mysqli_query($dbconnect, $insert_about);
    
    $_SESSION['success'] = 'Pricing Title Added Success';
    header('location:add_pricing_title.php');


?>