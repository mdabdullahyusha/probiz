<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_important_link = "DELETE FROM important_link WHERE id = '$id'";
    $delete_important_link_result = mysqli_query($dbconnect, $delete_important_link);
    
    $_SESSION['delete_footer'] = 'Footer Deleted Success';
    header('location:view_footer.php');
?>