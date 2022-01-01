<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM testimoni WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_about = "DELETE FROM testimoni WHERE id = '$id'";
    $delete_about_result = mysqli_query($dbconnect, $delete_about);

    $delete_from = '../uploads/testimonial/'.$after_assoc['testi_image'];
    unlink($delete_from);
    
    $_SESSION['delete_testimonial'] = 'Testimonial Deleted Success';
    header('location:view_testimonial.php');
?>