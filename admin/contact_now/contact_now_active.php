<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_contact_now_active = "SELECT * FROM contact_now WHERE id = '$id'";
    $select_contact_now_active_result = mysqli_query($dbconnect, $select_contact_now_active);
    $after_assoc = mysqli_fetch_assoc($select_contact_now_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE contact_now SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_contact_now.php');
    }
    else {

        $update_active1 = "UPDATE contact_now SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE contact_now SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_contact_now.php');
    }
?>