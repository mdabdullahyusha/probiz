<?php
    require '../db.php';

    $id = $_GET['id'];


    $select_reason_active = "SELECT * FROM reasons WHERE id = '$id'";
    $select_reason_active_result = mysqli_query($dbconnect, $select_reason_active);
    $after_assoc2 = mysqli_fetch_assoc($select_reason_active_result);

    $select_active_status = "SELECT * FROM reasons WHERE status = 1";
    $select_active_status_result = mysqli_query($dbconnect, $select_active_status);
    $select_active_row = mysqli_num_rows($select_active_status_result);
    
    if($after_assoc2['status'] == 1) {
        $update_active = "UPDATE reasons SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_why_us.php');
    }
    else {

        if($select_active_row > 7) {
            $_SESSION['error'] = 'Maximum 8 ta Dekhaite parben';
            header('location:view_why_us.php');
        }
        else {
            $update_active = "UPDATE reasons SET status = 1 WHERE id = '$id'";
            $update_active_result = mysqli_query($dbconnect, $update_active);
            header('location:view_why_us.php');
        }
    }
?>