<?php
    include '../connection/connect.php';
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $j_kel  = $_POST['j_kel'];
    $alamat = $_POST['alamat'];
    
    mysqli_query($connection, "UPDATE mahasiswa set nim='$nim', nama='$nama', j_kel='$j_kel', alamat='$alamat' where id='$id'");

    header("location:../index.php?page=tampil_mahasiswa");
?>