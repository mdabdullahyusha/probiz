<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_newsletter_active = "SELECT * FROM newsletter WHERE id = '$id'";
    $select_newsletter_active_result = mysqli_query($dbconnect, $select_newsletter_active);
    $after_assoc = mysqli_fetch_assoc($select_newsletter_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE newsletter SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_newsletter.php');
    }
    else {

        $update_active1 = "UPDATE newsletter SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE newsletter SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_newsletter.php');
    }
?>