<?php
    session_start();
    require '../db.php';
    
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $insert_service_title = "INSERT INTO service_title (category, name, description)
                    VALUES('$category', '$name', '$description')";
    $insert_service_title_result = mysqli_query($dbconnect, $insert_service_title);

    $_SESSION['success'] = 'Service Title Added Success';
    header('location:add_service.php');

?>