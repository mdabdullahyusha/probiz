<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_testimonial_active = "SELECT * FROM testimoni WHERE id = '$id'";
    $select_testimonial_active_result = mysqli_query($dbconnect, $select_testimonial_active);
    $after_assoc = mysqli_fetch_assoc($select_testimonial_active_result);

    $select_active_status = "SELECT * FROM testimoni WHERE status = 1";
    $select_active_status_result = mysqli_query($dbconnect, $select_active_status);
    $select_active_row = mysqli_num_rows($select_active_status_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE testimoni SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_testimonial.php');
    }
    else {

        if($select_active_row > 3) {
            $_SESSION['error'] = 'Maximum 4 ta Dekhaite parben';
            header('location:view_testimonial.php');
        }
        else {
            $update_active = "UPDATE testimoni SET status = 1 WHERE id = '$id'";
            $update_active_result = mysqli_query($dbconnect, $update_active);
            header('location:view_testimonial.php');
        }
    }
?>