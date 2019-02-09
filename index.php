<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="js/bootstrap.min.js"></script><script src="js/jquery.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">The Website</a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?page=home">Beranda</a></li>
                        <li><a href="index.php?page=tentang">Tentang</a></li>
                        <li><a href="index.php?page=tampil_mahasiswa">Mahasiswa</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
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
                    
                    case 'input_mahasiswa':
                        include "page/input_mahasiswa.php";
                        break;
                    
                    case 'update_mahasiswa':
                        include "page/update_mahasiswa.php";
                        break;
                    
                    default:
                        echo "<div class='row'><div class='col-md'><h2>404 PAGE NOT FOUND</h2><p>Maaf, halaman tidak ditemukan !</p></div></div>";
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