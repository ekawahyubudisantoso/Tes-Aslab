<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$connection){
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    $cdb = "CREATE DATABASE IF NOT EXISTS aslab";
    if(mysqli_query($connection, $cdb)){
    }else{
        echo "Database gagal dibuat : " . mysqli_error($connection);
    }

    $dbname = "aslab";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$connection){
        die("Connection failed: " . mysqli_connect_error());
    } 

    $ctb = "CREATE TABLE IF NOT EXISTS mhs (
        nim INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        jenis_kelamin ENUM('L','P') NOT NULL,
        alamat TEXT NOT NULL)";
    if(mysqli_query($connection, $ctb)){
        echo "Tabel berhasil di buat";
    }else{
        echo "Tabel gagal di buat : " . mysqli_error($connection);
    }

    mysqli_close($connection);
?>