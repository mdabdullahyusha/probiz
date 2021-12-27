<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_team_title = "DELETE FROM teams_title WHERE id = '$id'";
    $delete_team_title_result = mysqli_query($dbconnect, $delete_team_title);
    
    $_SESSION['delete_team_title'] = 'Team Title Deleted Success';
    header('location:view_team.php');
?>