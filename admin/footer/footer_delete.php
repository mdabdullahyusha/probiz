<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_footer = "DELETE FROM footers WHERE id = '$id'";
    $delete_footer_result = mysqli_query($dbconnect, $delete_footer);
    
    $_SESSION['delete_footer'] = 'Footer Deleted Success';
    header('location:view_footer.php');
?>