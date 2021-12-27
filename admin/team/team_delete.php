<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM teams WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_teams = "DELETE FROM teams WHERE id = '$id'";
    $delete_teams_result = mysqli_query($dbconnect, $delete_teams);

    $delete_from = '../uploads/teams/'.$after_assoc['profile_image'];
    unlink($delete_from);
    
    $_SESSION['delete_teams'] = 'Teams Deleted Success';
    header('location:view_team.php');
?>