<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_counter_img_active = "SELECT * FROM counter_image WHERE id = '$id'";
    $select_counter_img_active_result = mysqli_query($dbconnect, $select_counter_img_active);
    $after_assoc = mysqli_fetch_assoc($select_counter_img_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE counter_image SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_counter.php');
    }
    else {

        $update_active1 = "UPDATE counter_image SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE counter_image SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_counter.php');
    }
?>