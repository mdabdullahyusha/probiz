<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_counter_active = "SELECT * FROM counter WHERE id = '$id'";
    $select_counter_active_result = mysqli_query($dbconnect, $select_counter_active);
    $after_assoc = mysqli_fetch_assoc($select_counter_active_result);

    $select_active_status = "SELECT * FROM counter WHERE status = 1";
    $select_active_status_result = mysqli_query($dbconnect, $select_active_status);
    $select_active_row = mysqli_num_rows($select_active_status_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE counter SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_counter.php');
    }
    else {

        if($select_active_row > 3) {
            $_SESSION['error'] = 'Maximum 4 ta Dekhaite parben';
            header('location:view_counter.php');
        }
        else {
            $update_active = "UPDATE counter SET status = 1 WHERE id = '$id'";
            $update_active_result = mysqli_query($dbconnect, $update_active);
            header('location:view_counter.php');
        }
    }
?>