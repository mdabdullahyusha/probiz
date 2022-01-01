<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM counter_image WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_counter_image = "DELETE FROM counter_image WHERE id = '$id'";
    $delete_counter_image_result = mysqli_query($dbconnect, $delete_counter_image);

    $delete_from = '../uploads/counter/'.$after_assoc['counter_image'];
    unlink($delete_from);
    
    $_SESSION['delete_counter_image'] = 'Counter Image Deleted Success';
    header('location:view_counter.php');
?>