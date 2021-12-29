<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_pricing_title = "DELETE FROM pricing_title WHERE id = '$id'";
    $delete_pricing_title_result = mysqli_query($dbconnect, $delete_pricing_title);
    
    $_SESSION['delete_pricing_title'] = 'Pricing Title Deleted Success';
    header('location:view_pricing.php');
?>