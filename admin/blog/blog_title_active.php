<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_blog_title_active = "SELECT * FROM blog_title WHERE id = '$id'";
    $select_blog_title_active_result = mysqli_query($dbconnect, $select_blog_title_active);
    $after_assoc = mysqli_fetch_assoc($select_blog_title_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE blog_title SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_blog.php');
    }
    else {

        $update_active1 = "UPDATE blog_title SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE blog_title SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_blog.php');
    }
?>