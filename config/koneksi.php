<?php 
    $rootDir = $_SERVER['DOCUMENT_ROOT'].'/TUGAS WEB BUNGA/';
    $server = "localhost"; // nama server
    $user = "root";
    $pass = '';
    $db = "bunga"; // nama database 

    $koneksi = mysqli_connect($server, $user, $pass, $db);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>