<?php
    session_start();
    require '../db.php';
    
    $icon_link = $_POST['icon_link'];
    $number = $_POST['number'];
    $description = $_POST['description'];

    $insert_counter = "INSERT INTO counter (icon_link, number, description)
                    VALUES('$icon_link', '$number', '$description')";
    $insert_counter_result = mysqli_query($dbconnect, $insert_counter);

    $_SESSION['success'] = 'Counter Added Success';
    header('location:add_counter.php');

?>