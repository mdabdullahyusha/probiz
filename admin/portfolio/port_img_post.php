<?php
    session_start();
    require '../db.php';

    $class_name = $_POST['class_name'];

    $uploaded_file = $_FILES['port_img'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_about = "INSERT INTO portfolio_image (class_name)
                      VALUES('$class_name')";
            $insert_about_result = mysqli_query($dbconnect, $insert_about);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/portfolio_image/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_port_image = "UPDATE portfolio_image SET port_img = '$file_name' WHERE id = $id";
            $update_port_image_result = mysqli_query($dbconnect, $update_port_image);
            
            $_SESSION['success_t'] = 'About Added Success';
            header('location:add_portfolio.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_portfolio.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_portfolio.php');
    }

    


?>