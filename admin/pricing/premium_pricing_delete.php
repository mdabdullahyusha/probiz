<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_premium_pricing = "DELETE FROM premium_pricing WHERE id = '$id'";
    $delete_premium_pricing_result = mysqli_query($dbconnect, $delete_premium_pricing);
    
    $_SESSION['delete_premium_pricing'] = 'Pricing Title Deleted Success';
    header('location:view_pricing.php');
?>