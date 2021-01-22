<?php
    include '../config.php';
    if (!$_SESSION["isloggedin"])
    {
        $_SESSION["isloggedin"] = false;
        header('location: login');
        exit();
    }
    else{
        header('location: main');
    }
?>