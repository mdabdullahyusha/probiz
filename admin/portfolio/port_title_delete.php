<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];
    
    $delete_portfolio_title = "DELETE FROM portfolio_title WHERE id = '$id'";
    $delete_portfolio_title_result = mysqli_query($dbconnect, $delete_portfolio_title);

    
    $_SESSION['delete_port_title'] = 'Portfolio Title Deleted Success';
    header('location:view_portfolio.php');
?>