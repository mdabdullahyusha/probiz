<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_about_active = "SELECT * FROM abouts WHERE id = '$id'";
    $select_about_active_result = mysqli_query($dbconnect, $select_about_active);
    $after_assoc = mysqli_fetch_assoc($select_about_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE abouts SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_about.php');
    }
    else {

        $update_active1 = "UPDATE abouts SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE abouts SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_about.php');
    }
?>