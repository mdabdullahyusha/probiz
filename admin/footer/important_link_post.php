<?php
    session_start();
    require '../db.php';

    $link_info = $_POST['link_info'];
    $link = $_POST['link'];
    

    $insert_important_link = "INSERT INTO important_link (link_info, link)
                      VALUES('$link_info', '$link')";
    $insert_important_link_result = mysqli_query($dbconnect, $insert_important_link);

    $_SESSION['success_t'] = 'Contact Title Added Success';
    header('location:add_footer.php');

?>