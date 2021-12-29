<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_footer_active = "SELECT * FROM footers WHERE id = '$id'";
    $select_footer_active_result = mysqli_query($dbconnect, $select_footer_active);
    $after_assoc = mysqli_fetch_assoc($select_footer_active_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE footers SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_footer.php');
    }
    else {

        $update_active1 = "UPDATE footers SET status = 0";
        $update_active_result1 = mysqli_query($dbconnect, $update_active1);

        $update_active = "UPDATE footers SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_footer.php');
    }
?>