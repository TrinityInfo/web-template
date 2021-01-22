<?php
    include '../config.php';
    date_default_timezone_set('Asia/Kolkata');
    $date_time = date('d/m/Y g:i a');
    $insert = "INSERT INTO `contactdetail` (fname,lname,email,messgae,status,createdOn) VALUES 
    ('".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["message"]."','1','$date_time')";
    $conn->query($insert);
?>
