<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_basic_facility_active = "SELECT * FROM basic_pricing_facility WHERE id = '$id'";
    $select_basic_facility_active_result = mysqli_query($dbconnect, $select_basic_facility_active);
    $after_assoc = mysqli_fetch_assoc($select_basic_facility_active_result);

    $select_active_status = "SELECT * FROM basic_pricing_facility WHERE status = 1";
    $select_active_status_result = mysqli_query($dbconnect, $select_active_status);
    $select_active_row = mysqli_num_rows($select_active_status_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE basic_pricing_facility SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_pricing.php');
    }
    else {

        if($select_active_row > 5) {
            $_SESSION['error'] = 'Maximum 6 ta Dekhaite parben';
            header('location:view_pricing.php');
        }
        else {
            $update_active = "UPDATE basic_pricing_facility SET status = 1 WHERE id = '$id'";
            $update_active_result = mysqli_query($dbconnect, $update_active);
            header('location:view_pricing.php');
        }
    }
?>