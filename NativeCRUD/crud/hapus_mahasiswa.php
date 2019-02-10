<?php
    include '../connection/connect.php';
    $id = $_GET['id'];
    mysqli_query($connection, "DELETE FROM mahasiswa where id='$id'");
    header("location:../index.php?page=tampil_mahasiswa")
?>