<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {
    header("location:logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="menu.css">
</head>

<header>


    <nav class="navbar">
        <div class="center"> <!-- Tambahkan div dengan class "center" -->
            <ul class="menu">
                <div class="logo"><a href="home.php">DOYAN DINGIN</a></div>
                <li class="menu-item"><a href="home.php">||HOME</a></li>
                <li class="menu-item dropdown">
                    <a href="#">MASTER <i class="fas fa-caret-down"></i></a>
                    <ul class="submenu">
                        <?php if ($_SESSION["level"] == "admin") : ?>
                            <li class="submenu-item"><a href="user.php">User</a></li>
                        <?php endif ?>
                        <li class="submenu-item"><a href="barang.php">Barang</a></li>
                        <?php if ($_SESSION["level"] == "admin" || $_SESSION["level"] == "keuangan") : ?>
                            <li class="submenu-item"><a href="pelanggan.php">Pelanggan</a></li>
                        <?php endif ?>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">TRANSAKSI <i class="fas fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="penjualan.php">Penjualan</a></li>
                    </ul>
                </li>
                <li class="menu-item dropdown" style="margin-left: 10px;">
                    <a href="#"><i class="fas fa-user"></i><?= ucwords($_SESSION["username"]) ?><i class="fas fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li class="submenu-item"><a href="profil.php">Profil</a></li>
                        <li class="submenu-item"><a href="logout.php">Log out</a></li>
                    </ul>
                </li>
                <li class="menu-item1">Selamat Datang, <?= strtoupper($_SESSION["username"]) ?>!</li>
            </ul>
        </div>
    </nav>
</header>

<body>
    
</body>

</html>