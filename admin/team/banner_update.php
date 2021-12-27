<?php
    session_start();
    require '../db.php';

    $id = $_SESSION['id'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $btn_1 = $_POST['btn_1'];
    $btn_1_link = $_POST['btn_1_link'];
    $btn_2 = $_POST['btn_2'];
    $btn_2_link = $_POST['btn_2_link'];

    

    $uploaded_file = $_FILES['bg_image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extenstion = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'webp');

    if($_FILES['bg_image']['name'] != '') {
        if(in_array($extension, $allowed_extenstion)) {
            if($uploaded_file['size'] < 10000000000 ) {

                $select_image = "SELECT * FROM banners WHERE id = '$id'";
                $select_image_result = mysqli_query($dbconnect, $select_image);
                $after_assoc = mysqli_fetch_assoc($select_image_result);

                $delete_from = '../uploads/banners/'.$after_assoc['bg_image'];
                unlink($delete_from);

                $update_banner = "UPDATE banners SET title='$title', description='$description', btn_1='$btn_1', btn_1_link='$btn_1_link', btn_2='$btn_2', btn_2_link='$btn_2_link' WHERE id=$id";
                $update_banner_result = mysqli_query($dbconnect, $update_banner);

                // Password Validation/Update
                $time_sec = time();

                // $file_name = $id.'.'. $extension;
                $file_name = $id.$time_sec. '.'. $extension;
                $new_location = '../uploads/banners/'.$file_name;

                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $update_banner_image = "UPDATE banners SET bg_image = '$file_name' WHERE id = $id";
                $update_banner_image_result = mysqli_query($dbconnect, $update_banner_image);
                
                $_SESSION['success'] = 'Registration Success';
                header('location:view_banner.php?id='.$id);
            }
            else {
                $_SESSION['extension'] = 'File Size To Large';
                header('location:view_banner.php?id='.$id);
            }
        }
        else {
            $_SESSION['extension'] = 'Invalid Extension';
            header('location:view_banner.php?id='.$id);
        }
    }
    else {
        $update_banner = "UPDATE banners SET title='$title', description='$description', btn_1='$btn_1', btn_1_link='$btn_1_link', btn_2='$btn_2', btn_2_link='$btn_2_link' WHERE id=$id";
        $update_banner_result = mysqli_query($dbconnect, $update_banner);

        $_SESSION['success'] = 'Banner Updated';
        header('location:view_banner.php?id='.$id);
    }


    
 
?>