<?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input";
        }else if($pesan == "update"){
            echo "Data berhasil di update";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus";
        }
    }
?>
<div class="row">
    <div class="col-md">
        <h3>Data Mahasiswa</h3>
        <a href="index.php?page=input_mahasiswa" class="btn btn-primary">Tambah <span class="glyphicon glyphicon-plus"></span></a>
        <br>
        <br>
        <table class="table">
            <tr>
                <th>NO.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php
            include "connection/connect.php";
            $no = 1;
            $query = mysqli_query($connection, "SELECT * FROM mahasiswa");
            while($arr = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $arr['nim']; ?></td>
                    <td><?php echo $arr['nama']; ?></td>
                    <td><?php echo $arr['j_kel']; ?></td>
                    <td><?php echo $arr['alamat']; ?></td>
                    <td>
                        <a href="index.php?page=rename_mahasiswa&id=<?php echo $arr['id']; ?>" class="btn btn-warning">Edit <span class="glyphicon glyphicon-pencil"></span></a> | 
                        <a href="crud/hapus_mahasiswa.php?id=<?php echo $arr['id']; ?>" class="btn btn-danger">Hapus <span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br/>
    </div>
</div>