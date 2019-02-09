<?php
    include '../connection/connect.php';
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $j_kel  = $_POST['j_kel'];
    $alamat = $_POST['alamat'];
    
    mysqli_query($connection, "INSERT INTO mahasiswa values('$nim','$nama','$j_kel','$alamat')");

    header("location:../index.php?page=tampil_mahasiswa");
?>