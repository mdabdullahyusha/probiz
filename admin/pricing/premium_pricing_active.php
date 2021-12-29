<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_premium_pricing_active = "SELECT * FROM premium_pricing WHERE id = '$id'";
    $select_premium_pricing_active_result = mysqli_query($dbconnect, $select_premium_pricing_active);
    $after_assoc = mysqli_fetch_assoc($select_premium_pricing_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE premium_pricing SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_pricing.php');
    }
    else {

        $update_active1 = "UPDATE premium_pricing SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE premium_pricing SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_pricing.php');
    }
?>