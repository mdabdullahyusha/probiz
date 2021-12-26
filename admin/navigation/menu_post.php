<?php
    session_start();
    require '../db.php';


        $menu_name = $_POST['menu_name'];
        $link = $_POST['link'];

        $insert_menu = "INSERT INTO menus (menu_name, link)
                VALUES('$menu_name', '$link')";
        $insert_menu_result = mysqli_query($dbconnect, $insert_menu);

        if ($insert_menu_result) {
            $_SESSION['success'] = 'Data Added Success';
            header('location:add_menu.php');
        }

?>