<?php
    session_start();
    require '../db.php';

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
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_team = "INSERT INTO teams(name, job_post, icon_01, icon_01_link, icon_02, icon_02_link, icon_03, icon_03_link, icon_04, icon_04_link)
                      VALUES('$name', '$job_post', '$icon_01', '$icon_01_link', '$icon_02', '$icon_02_link', '$icon_03', '$icon_03_link', '$icon_04', '$icon_04_link')";
            $insert_team_result = mysqli_query($dbconnect, $insert_team);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/teams/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_team_image = "UPDATE teams SET profile_image = '$file_name' WHERE id = $id";
            $update_team_image_result = mysqli_query($dbconnect, $update_team_image);
            
            $_SESSION['success'] = 'Team Added Success';
            header('location:add_team.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_team.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_team.php');
    }

    


?>