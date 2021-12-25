<?php
    session_start();
    require '../db.php';

    $id = $_SESSION['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];

    

    $uploaded_file = $_FILES['profile_image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extenstion = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'webp');

    if($_FILES['profile_image']['name'] != '') {
        if(in_array($extension, $allowed_extenstion)) {
            if($uploaded_file['size'] < 100000000 ) {

                $select_image = "SELECT * FROM users WHERE id = '$id'";
                $select_image_result = mysqli_query($dbconnect, $select_image);
                $after_assoc = mysqli_fetch_assoc($select_image_result);

                $delete_from = '../uploads/users/'.$after_assoc['profile_image'];
                unlink($delete_from);

                $update_user = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
                $update_user_result = mysqli_query($dbconnect, $update_user);

                // Password Validation/Update
                $time_sec = time();

                // $file_name = $id.'.'. $extension;
                $file_name = $id.$time_sec. '.'. $extension;
                $new_location = '../uploads/users/'.$file_name;

                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $update_user_image = "UPDATE users SET profile_image = '$file_name' WHERE id = $id";
                $update_user_image_result = mysqli_query($dbconnect, $update_user_image);
                
                $_SESSION['register_success'] = 'Registration Success';
                header('location:user_edit.php?id='.$id);
            }
            else {
                $_SESSION['extension'] = 'File Size To Large';
                header('location:user_edit.php?id='.$id);
            }
        }
        else {
            $_SESSION['extension'] = 'Invalid Extension';
            header('location:user_edit.php?id='.$id);
        }
    }
    else {
        $update_user = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        $update_user_result = mysqli_query($dbconnect, $update_user);

        $_SESSION['update_success'] = 'User Updated';
        header('location:user_edit.php?id='.$id);
    }


    
 
?>