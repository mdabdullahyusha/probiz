<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $delete_newsletter_mail = "DELETE FROM newsletter_mail WHERE id = '$id'";
    $delete_newsletter_mail_result = mysqli_query($dbconnect, $delete_newsletter_mail);
    
    $_SESSION['delete_newsletter_mail'] = 'Newsletter Deleted Success';
    header('location:view_mail.php');
    
?>