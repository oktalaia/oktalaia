<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Read Penjualan</title>
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
            font-weight: bold;
        }

        td.input,
        td.input-p {
            padding: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
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

        button[type="button"] {
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

        button[type="button"]:hover {
            background-color: #005f7f;
        }
    </style>
</head>

<body>
    <header>
        <?php include "menu.php"; ?>
    </header>

    <?php
    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff WHERE penjualan.id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $penjualan = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <h1>Lihat Penjualan</h1>
        <form action="">
            <table>
                <tr>
                    <td class="label">Nama Barang</td>
                    <td class="input"><input readonly type="text" value="<?= $penjualan["nama_barang"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Jumlah</td>
                    <td class="input"><input readonly type="text" value="<?= $penjualan["jumlah"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Total Harga</td>
                    <td class="input"><input readonly type="text" value="<?= $penjualan["total_harga"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Diinput oleh</td>
                    <td class="input"><input readonly type="text" value="<?= $penjualan["username"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Waktu</td>
                    <td class="input"><input readonly type="text" value="<?= $penjualan["created_at"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <a href="penjualan.php"><button type="button">BACK</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<footer>
    <?php include "footer.php" ?>
</footer>

</html>