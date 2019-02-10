<?php
    include 'connection/connect.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM mahasiswa where id='$id'");
    while($arr = mysqli_fetch_array($query)){
?>

<div class="container-fluid">
    <h3>Edit Data Mahasiswa</h3>
    <br>
    <a href="index.php?page=tampil_mahasiswa" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
    <br>
    <br>
    <form action="crud/edit_mahasiswa.php" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="hidden" value="<?php echo $arr['id']; ?>" name="id" class="form-control">
            <input type="text" value="<?php echo $arr['nim']; ?>" name="nim" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" value="<?php echo $arr['nama']; ?>" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="j_kel">Jenis Kelamin</label>
            <?php $j_kel = $arr['j_kel']; ?>
            <select name="j_kel" id="j_kel" class="form-control">
                <option value="-- Pilih --">-- Pilih --</option>
                <option value="Laki-laki" <?php echo ($j_kel == 'Laki-laki') ? "selected" : "" ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo ($j_kel == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" value="<?php echo $arr['alamat']; ?>" name="alamat" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Edit <span class="glyphicon glyphicon-pencil"></span></button>
    </form>
<?php
    }
?>
</div>