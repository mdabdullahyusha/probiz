<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $delete_testi_title = "DELETE FROM testi_title WHERE id = '$id'";
    $delete_testi_title_result = mysqli_query($dbconnect, $delete_testi_title);

    $_SESSION['delete_testi_title'] = 'Testimonial Title Deleted Success';
    header('location:view_testimonial.php');
?>