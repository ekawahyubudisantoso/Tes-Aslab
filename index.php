<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="content">
        <header>
            <h1>The Website</h1>
            <p>Ini Contoh website dinamis dengan CRUD</p>
        </header>
        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">Beranda</a></li>
                <li><a href="index.php?page=tentang">Tentang</a></li>
                <li><a href="index.php?page=tampil_mahasiswa">Mahasiswa</a></li>
            </ul>
        </div>
        <div class="badan">
            <?php
            include "connection/connect.php";
            if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include "page/home.php";
                        break;

                    case 'tampil_mahasiswa':
                        include "page/tampil_mahasiswa.php";
                        break;
                    
                    default:
                        echo "<div class='halaman'><h3>404 PAGE NOT FOUND</h3><p>Maaf, halaman tidak ditemukan !</p></div>";
                        break;
                }
            }else{
                include "page/home.php";
            }
            ?>
        </div>
    </div>
</body>
</html>