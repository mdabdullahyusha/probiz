<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_port_img_active = "SELECT * FROM portfolio_image WHERE id = '$id'";
    $select_port_img_active_result = mysqli_query($dbconnect, $select_port_img_active);
    $after_assoc = mysqli_fetch_assoc($select_port_img_active_result);

    $select_active_status = "SELECT * FROM portfolio_image WHERE status = 1";
    $select_active_status_result = mysqli_query($dbconnect, $select_active_status);
    $select_active_row = mysqli_num_rows($select_active_status_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE portfolio_image SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_portfolio.php');
    }
    else {

        if($select_active_row > 5) {
            $_SESSION['error'] = 'Maximum 6 ta Dekhaite parben';
            header('location:view_portfolio.php');
        }
        else {
            $update_active = "UPDATE portfolio_image SET status = 1 WHERE id = '$id'";
            $update_active_result = mysqli_query($dbconnect, $update_active);
            header('location:view_portfolio.php');
        }
    }
?>