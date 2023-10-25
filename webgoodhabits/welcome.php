<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goodHABITS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="navbar">
        <a href="menu1.php"><img src="img/menu.png" alt="" id="menu"></a>
        <p id="logo">goodHABITS <br> make your life better</p>
        <input type="text" placeholder="what you need right now?" id="search">
        <a href=""><img src="img/search-interface-symbol.png" alt="" id="search2"></a>
    </div>
    <div class="content">.
            <h2 id="text-oppening1">goodHABITS</h2>
            <h4 id="text-oppening2">On this website there are some tips and tricks on how you can get rid of bad habits in yourself!</h4>
            <br>
            <style>
                #dd {
                    font-weight: bold;
                }
            </style>
            <?php echo "<p id=dd>Selamat Datang " . $_SESSION[ 'username'] .", Selamat bergabung><"."</p>"; ?>
    </div>
    <div class="content-img">
        <div class="container-1">
        <a href="habitss.php">
            <div class="content-1">
            <h4 id="text-content"> Ubah Pola Hidup Anda <br> Jadi Lebih Baik </h4>
            <img src="img/lifestyle.png" alt="" id="img-content">
        </div>
        </a>
        <a href="tabungan.php">
            <div class="content-2">
            <h4 id="text-content">Atur Tabunganmu Disini</h4>
            <img src="img/accounting.png" alt="" id="img-content">
        </div>
        </a>
        </div>
        <br><br>
        <div class="container-1">
        <a href="workout-wu.php"><div class="content-3">
            <h4 id="text-content">Jaga Imunitas Tubuhmu dengan Berolahraga, dan Ikuti Tantangannya!</h4>
            <img src="img/workout.png" alt="" id="img-content">
        </div>
        </a>
        <a href="to-do-list.php">
            <div class="content-4">
                <h4 id="text-content"> Buat Daftar Harianmu!</h4>
                <img src="img/to-do-list.png" alt="" id="img-content">
            </div>
        </a>
    </div>
    </div>
    <div class="copyright">
        <p>© 2023. goodHABITS. All right reverved. </p>
        <style> #logout {
            text-decoration: none;
            color: red;
        }</style>
        <a href="logout.php" id="logout" >Logout</a>
    </div>
</body>
</html>
