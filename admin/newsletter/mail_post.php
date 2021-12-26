<?php
    require '../db.php';

    $id = $_GET['id'];

    $select_newsletter_mail_unread = "SELECT * FROM newsletter_mail WHERE id = '$id'";
    $select_newsletter_mail_unread_result = mysqli_query($dbconnect, $select_newsletter_mail_unread);
    $after_assoc = mysqli_fetch_assoc($select_newsletter_mail_unread_result);
    
    if($after_assoc['status'] == 0) {
        $update_active = "UPDATE newsletter_mail SET status = 1 WHERE id = '$id'";
        $update_active_result = mysqli_query($dbconnect, $update_active);
        header('location:view_mail.php');
    }
    
?>