<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_why_choose_active = "SELECT * FROM why_choose_title WHERE id = '$id'";
    $select_why_choose_active_result = mysqli_query($dbconnect, $select_why_choose_active);
    $after_assoc = mysqli_fetch_assoc($select_why_choose_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE why_choose_title SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_why_us.php');
    }
    else {

        $update_active1 = "UPDATE why_choose_title SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE why_choose_title SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_why_us.php');
    }

?>