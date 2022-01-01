<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM services WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_services = "DELETE FROM services WHERE id = '$id'";
    $delete_services_result = mysqli_query($dbconnect, $delete_services);

    $delete_from = '../uploads/services/'.$after_assoc['service_image'];
    unlink($delete_from);
    
    $_SESSION['delete_service'] = 'About Deleted Success';
    header('location:view_service.php');
?>