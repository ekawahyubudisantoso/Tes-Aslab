<div class="container-fluid">
    <h3>Input Data Mahasiswa</h3>
    <br/>
    <a href="index.php?page=tampil_mahasiswa" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
    <br/>
    <br/>
    <form action="crud/simpan_mahasiswa.php" method="post">
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="text" name="nim" class="form-control">
        </div>
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="Jenis Kelamin">Jenis Kelamin</label>
            <select name="j_kel" id="j_kel" class="form-control">
                <option value="-- Pilih --">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan <span class="glyphicon glyphicon-send"></span></button>
    </form>
</div>