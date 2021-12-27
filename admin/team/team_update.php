<?php
    session_start();
    require '../db.php';

    $id = $_SESSION['id'];

    $name = $_POST['name'];
    $job_post = $_POST['job_post'];
    $icon_01 = $_POST['icon_01'];
    $icon_01_link = $_POST['icon_01_link'];
    $icon_02 = $_POST['icon_02'];
    $icon_02_link = $_POST['icon_02_link'];
    $icon_03 = $_POST['icon_03'];
    $icon_03_link = $_POST['icon_03_link'];
    $icon_04 = $_POST['icon_04'];
    $icon_04_link = $_POST['icon_04_link'];
    

    $uploaded_file = $_FILES['profile_image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extenstion = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'webp');

    if($_FILES['profile_image']['name'] != '') {
        if(in_array($extension, $allowed_extenstion)) {
            if($uploaded_file['size'] < 10000000000 ) {

                $select_image = "SELECT * FROM teams WHERE id = '$id'";
                $select_image_result = mysqli_query($dbconnect, $select_image);
                $after_assoc = mysqli_fetch_assoc($select_image_result);

                $delete_from = '../uploads/teams/'.$after_assoc['profile_image'];
                unlink($delete_from);

                $update_team = "UPDATE teams SET name='$name', job_post='$job_post', icon_01='$icon_01', icon_01_link='$icon_01_link', icon_02='$icon_02', icon_02_link='$icon_02_link', icon_03='$icon_03', icon_03_link='$icon_03_link', icon_04='$icon_04', icon_04_link='$icon_04_link' WHERE id=$id";
                $update_team_result = mysqli_query($dbconnect, $update_team);

                // Password Validation/Update
                $time_sec = time();

                // $file_name = $id.'.'. $extension;
                $file_name = $id.$time_sec. '.'. $extension;
                $new_location = '../uploads/teams/'.$file_name;

                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $update_team_image = "UPDATE teams SET profile_image = '$file_name' WHERE id = $id";
                $update_team_image_result = mysqli_query($dbconnect, $update_team_image);
                
                $_SESSION['success'] = 'Team Updated Success';
                header('location:view_team.php?id='.$id);
            }
            else {
                $_SESSION['extension'] = 'File Size To Large';
                header('location:view_team.php?id='.$id);
            }
        }
        else {
            $_SESSION['extension'] = 'Invalid Extension';
            header('location:view_team.php?id='.$id);
        }
    }
    else {
        $update_team = "UPDATE teams SET name='$name', job_post='$job_post', icon_01='$icon_01', icon_01_link='$icon_01_link', icon_02='$icon_02', icon_02_link='$icon_02_link', icon_03='$icon_03', icon_03_link='$icon_03_link', icon_04='$icon_04', icon_04_link='$icon_04_link' WHERE id=$id";
        $update_team_result = mysqli_query($dbconnect, $update_team);

        $_SESSION['success'] = 'Team Updated';
        header('location:view_team.php?id='.$id);
    }


    
 
?>