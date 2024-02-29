<!DOCTYPE html>
<html>

<head>
    <title>New Penjualan</title>
</head>

<header>
    <?php include "menu.php"; ?>
</header>

<body>
    <?php
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "keuangan") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <?php
    require "koneksi.php";

    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <form action="create-penjualan.php" method="POST">
            <h1>Tambah Penjualan</h1>
            <table>
                <tr>
                    <td>Barang</td>
                    <td>
                        <select name="id_barang">
                            <?php while ($barang = mysqli_fetch_array($query)) : ?>
                                <option value='<?= $barang["id"] ?>'>
                                    <?= $barang["nama"] ?>, harga: <?= $barang["harga"] ?>, stok: <?= $barang["stok"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                    <td>Pelanggan</td>
                    <td>
                        <select name="id_pelanggan">
                            <?php 
                            $sql = "SELECT * FROM pelanggan";
                            $query = mysqli_query($koneksi, $sql);
                            ?>
                            <?php while ($pelanggan = mysqli_fetch_array($query)) : ?>
                                <option value='<?= $pelanggan["id"] ?>'>
                                    <?= $pelanggan["nama"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="number" min="0" name="jumlah"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<footer>
    <?php include "menu-footer.php" ?>
</footer>

</html