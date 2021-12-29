<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_reason = "DELETE FROM reasons WHERE id = '$id'";
    $delete_reason_result = mysqli_query($dbconnect, $delete_reason);
    
    $_SESSION['delete_reasons'] = 'Reasons Deleted Success';
    header('location:view_why_us.php');
?>