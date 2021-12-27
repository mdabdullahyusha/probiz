<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    

    $insert_team_title = "INSERT INTO teams_title (category, title, description)
                      VALUES('$category', '$title', '$description')";
    $insert_team_title_result = mysqli_query($dbconnect, $insert_team_title);

    $_SESSION['success_t'] = 'Team Title Added Success';
    header('location:add_team.php');

?>