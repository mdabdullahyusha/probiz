<?php
    session_start();
    require '../db.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $btn_1 = $_POST['btn_1'];
    $btn_1_link = $_POST['btn_1_link'];
    $btn_2 = $_POST['btn_2'];
    $btn_2_link = $_POST['btn_2_link'];

    $uploaded_file = $_FILES['bg_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_banner = "INSERT INTO banners(title, description, btn_1, btn_1_link, btn_2, btn_2_link)
                      VALUES('$title', '$description', '$btn_1', '$btn_1_link', '$btn_2', '$btn_2_link')";
            $insert_banner_result = mysqli_query($dbconnect, $insert_banner);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/banners/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_banner_image = "UPDATE banners SET bg_image = '$file_name' WHERE id = $id";
            $update_banner_image_result = mysqli_query($dbconnect, $update_banner_image);
            
            $_SESSION['success'] = 'Banner Added Success';
            header('location:add_banner.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_banner.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_banner.php');
    }

    


?>