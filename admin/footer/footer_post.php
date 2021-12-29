<?php
    session_start();
    require '../db.php';

    $footer = $_POST['footer'];
    $sponsor_link = $_POST['sponsor_link'];
    $sponsor_name = $_POST['sponsor_name'];

    $insert_footer = "INSERT INTO footers (footer, sponsor_link, sponsor_name)
                      VALUES('$footer', '$sponsor_link', '$sponsor_name')";
            $insert_footer_result = mysqli_query($dbconnect, $insert_footer);

            $_SESSION['success'] = 'Footer Added Success';
            header('location:add_footer.php');
   
?>