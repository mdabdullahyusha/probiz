<?php
    session_start();
    require '../db.php';


        $logo_name = $_FILES['logo_name'];
        $after_explode = explode('.', $logo_name['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($logo_name['size'] < 2000000000000) {
            // $insert_logo = "INSERT INTO logos(title, desp, btn)
            //           VALUES('$title', '$desp', '$btn')";
            // $insert_banner_result = mysqli_query($dbconnect, $insert_banner);

            // $id = mysqli_insert_id($dbconnect);

            $time_sec = time();
            $file_name = $time_sec.'.'.$extension;
            $new_location = '../uploads/logos/'.$file_name;
            move_uploaded_file($logo_name['tmp_name'], $new_location);

            $insert_logo = "INSERT INTO logos(logo_name)
                           VALUES('$file_name')";
                        $insert_logo_result = mysqli_query($dbconnect, $insert_logo);
            
            $_SESSION['success'] = 'Logo Added Success';
            header('location:add_logo.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_logo.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_logo.php');
    }

?>
