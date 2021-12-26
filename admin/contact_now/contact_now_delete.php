<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM contact_now WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_contact_now = "DELETE FROM contact_now WHERE id = '$id'";
    $delete_contact_now_result = mysqli_query($dbconnect, $delete_contact_now);

    $delete_from = '../uploads/contact_now/'.$after_assoc['contact_now_image'];
    unlink($delete_from);
    
    $_SESSION['delete_contact_now'] = 'Contact Now Deleted Success';
    header('location:view_contact_now.php');
?>