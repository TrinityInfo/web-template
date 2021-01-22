<?php
    // $conn = new mysqli('127.0.0.1','root','','sriakils');
    $conn = new mysqli('localhost','root','','sri_akils');
    $conn -> set_charset("utf8");
    
    if ($conn->connect_error)
    {
        die ('Connection Failed'.$conn->connect_error);
        session_destroy();
    }
    else{
        session_start();
    }
    mysqli_set_charset($conn,'utf8');
?>