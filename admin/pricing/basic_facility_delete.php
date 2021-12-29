<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_basic_pricing_facility = "DELETE FROM basic_pricing_facility WHERE id = '$id'";
    $delete_basic_pricing_facility_result = mysqli_query($dbconnect, $delete_basic_pricing_facility);
    
    $_SESSION['delete_basic_pricing_facility'] = 'Pricing Title Deleted Success';
    header('location:view_pricing.php');
?>