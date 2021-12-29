<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_standard_pricing = "DELETE FROM standard_pricing WHERE id = '$id'";
    $delete_standard_pricing_result = mysqli_query($dbconnect, $delete_standard_pricing);
    
    $_SESSION['delete_standard_pricing'] = 'Pricing Title Deleted Success';
    header('location:view_pricing.php');
?>