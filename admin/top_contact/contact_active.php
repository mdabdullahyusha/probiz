<?php
    require '../db.php';

    $id = $_GET['id'];


    $select_social_icon_active = "SELECT * FROM social_icon WHERE id = '$id'";
    $select_social_icon_active_result = mysqli_query($dbconnect, $select_social_icon_active);
    $after_assoc = mysqli_fetch_assoc($select_social_icon_active_result);

    $select_social_icon_status = "SELECT * FROM social_icon WHERE status = 1";
    $select_social_icon_status_result = mysqli_query($dbconnect, $select_social_icon_status);
    $select_social_icon_row = mysqli_num_rows($select_social_icon_status_result);
    
    if($after_assoc['status'] == 1) {
        $update_active = "UPDATE social_icon SET status = 0 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_contact.php');
    }
    else {

        if($select_social_icon_row > 3) {
            $_SESSION['error'] = 'Maximum 4 ta Dekhaite parben';
            header('location:view_contact.php');
        }
        else {
            $update_active = "UPDATE social_icon SET status = 1 WHERE id = '$id'";
            $update_active_result = mysqli_query($dbconnect, $update_active);
            header('location:view_contact.php');
        }
    }
?>