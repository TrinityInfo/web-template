<?php 
    include '../config.php';
    $_SESSION["isloggedin"] = false;
    session_destroy();
    header('location: login');
?>