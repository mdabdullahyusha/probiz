<?php
    session_start();
    require '../db.php';

    $title = $_POST['title'];
    $price = $_POST['price'];
    $btn = $_POST['btn'];

    $insert_about = "INSERT INTO standard_pricing (price, title, btn)
                VALUES('$price', '$title', '$btn')";
    $insert_about_result = mysqli_query($dbconnect, $insert_about);
    
    $_SESSION['success'] = 'Pricing Added Success';
    header('location:standard_pricing.php');

?>