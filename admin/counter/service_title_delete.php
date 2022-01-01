<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_service_title = "DELETE FROM service_title WHERE id = '$id'";
    $delete_service_title_result = mysqli_query($dbconnect, $delete_service_title);
    
    $_SESSION['delete_service_title'] = 'Service Title Deleted Success';
    header('location:view_service.php');
?>