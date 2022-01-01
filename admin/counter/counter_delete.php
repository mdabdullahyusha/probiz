<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $delete_counter = "DELETE FROM counter WHERE id = '$id'";
    $delete_counter_result = mysqli_query($dbconnect, $delete_counter);

    $_SESSION['delete_counter'] = 'Counter Deleted Success';
    header('location:view_counter.php');
?>