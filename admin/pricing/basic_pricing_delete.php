<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_basic_pricing = "DELETE FROM basic_pricing WHERE id = '$id'";
    $delete_basic_pricing_result = mysqli_query($dbconnect, $delete_basic_pricing);
    
    $_SESSION['delete_basic_pricing'] = 'Pricing Title Deleted Success';
    header('location:view_pricing.php');
?>