<?php
    session_start();
    require '../db.php';

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    
    $insert_port_title = "INSERT INTO portfolio_title (title, category, description)
                VALUES('$title', '$category', '$description')";
    $insert_port_title_result = mysqli_query($dbconnect, $insert_port_title);

    $_SESSION['success'] = 'Portfolio Title Added Success';
    header('location:add_portfolio.php');

    


?>