<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_newsletter = "DELETE FROM newsletter WHERE id = '$id'";
    $delete_newsletter_result = mysqli_query($dbconnect, $delete_newsletter);
    
    $_SESSION['delete_newsletter'] = 'Newsletter Deleted Success';
    header('location:view_newsletter.php');
?>