<?php
    session_start();
    require '../db.php';

    $title = $_POST['title'];
    $price = $_POST['price'];
    $btn = $_POST['btn'];

    $insert_premium = "INSERT INTO premium_pricing (price, title, btn)
                VALUES('$price', '$title', '$btn')";
    $insert_premium_result = mysqli_query($dbconnect, $insert_premium);
    
    $_SESSION['success'] = 'Pricing Added Success';
    header('location:premium_pricing.php');

?>