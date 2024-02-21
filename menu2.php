<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {
    // jika di sesi ini tidak ada username yang aktif, proses ke logout
    header("location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="menu.css">
    <style>
        /* Additional styling can be added here */
    </style>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">Doyan Dingin</a></div>
            <ul class="links">
                <li><a href="home.php">HOME</a></li>
                <li>MASTER
                    <ul>
                        <!-- menu user hanya muncul untuk admin -->
                        <?php if ($_SESSION["level"] == "admin") : ?>
                            <li><a href="user.php">User</a></li>
                        <?php endif ?>
                        <li><a href="barang.php">Barang</a></li>
                    </ul>
                </li>
                <li>TRANSAKSI
                    <ul>
                        <li><a href="penjualan.php">Penjualan</a></li>
                        <li><a href="pembelian.php">Pembelian</a></li>
                    </ul>
                </li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
            <a href="#" class="action_btn">Selamat datang, <?= $_SESSION["username"] ?>!</a>
            <div class="toggle_btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="dropdown_menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li>MASTER
                <ul>
                    <!-- menu user hanya muncul untuk admin -->
                    <?php if ($_SESSION["level"] == "admin") : ?>
                        <li><a href="user.php">User</a></li>
                    <?php endif ?>
                    <li><a href="barang.php">Barang</a></li>
                </ul>
            </li>
            <li>TRANSAKSI
                <ul>
                    <li><a href="penjualan.php">Penjualan</a></li>
                    <li><a href="pembelian.php">Pembelian</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="action_btn">
                    Selamat datang, <?= $_SESSION["username"] ?>!
                    <ul>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </a>
            </li>

        </ul>
    </div>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.className = isOpen ? 'fas fa-xmark' : 'fas fa-bars';
        }
    </script>
</body>

</html>