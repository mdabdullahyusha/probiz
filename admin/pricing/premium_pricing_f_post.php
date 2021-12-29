<?php
    session_start();
    require '../db.php';

    $facility = $_POST['facility'];
    
    $insert_facility = "INSERT INTO premium_pricing_facility (facility) VALUES('$facility')";
    $insert_facility_result = mysqli_query($dbconnect, $insert_facility);

    $_SESSION['success_t'] = 'Facility Added Success';
    header('location:premium_pricing.php');

?>