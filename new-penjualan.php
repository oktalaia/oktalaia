<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>New Penjualan</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
            background-image: url(image/penjualan.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px 2px rgba(0, 0, 255, 0.5);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td.label,
        td.label-p {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            /* Underline */
        }

        td.input,
        td.input-p {
            padding: 10px;
        }

        select,
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        button[type="submit"],
        button[type="reset"] {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            background-color: #87CEFA;
            color: black;
            cursor: pointer;
            font-weight: bold;
            border: 2px solid #005f7f;
        }

        button[type="submit"]:hover,
        button[type="reset"]:hover {
            background-color: #005f7f;
        }
    </style>
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

    <div class="container">
        <h1>Tambah Penjualan</h1>
        <form action="create-penjualan.php" method="POST">
            <table>
                <tr>
                    <td class="label">Barang</td>
                    <td class="input">
                        <select name="id_barang">
                            <?php while ($barang = mysqli_fetch_array($query)) : ?>
                                <option value='<?= $barang["id"] ?>'>
                                    <?= $barang["nama"] ?>, harga: <?= $barang["harga"] ?>, stok: <?= $barang["stok"] ?>
                                </option>
                            <?php endwhile ?>
                        </select>
                    </td>
                    <td class="label-p">Pelanggan</td>
                    <td class="input-p">
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
                    <td class="label">Jumlah</td>
                    <td class="input"><input type="number" min="0" name="jumlah"></td>
                </tr>
            </table>
            <div class="button-container">
                <button type="submit">SIMPAN</button>
                <button type="reset">RESET</button>
            </div>
        </form>
    </div>
</body>

<footer>
    <?php include "footer.php" ?>
</footer>

</html>