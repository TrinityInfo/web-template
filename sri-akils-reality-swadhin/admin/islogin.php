<?php
    session_start();
    if(!$_SESSION["isloggedin"]){
        $_SESSION["isloggedin"] = true;
        header('location: login.php');
        exit();
    }
?>