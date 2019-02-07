<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $connection = new mysqli($dbhost, $dbuser, $dbpass);
    if($connection->connect_error){
        die("Koneksi gagal: " . $connection->connect_error);
    }
    
    $cdb = "CREATE DATABASE IF NOT EXISTS aslab";
    if($connection->query($cdb) == TRUE){
        echo "Database berhasil dibuat";
    }else{
        echo "Database gagal dibuat : " . $connection->error;
    }

    $connection->close();
?>