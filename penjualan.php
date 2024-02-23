<!DOCTYPE html>
<html>

<head>
    <title>Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 1200px;
            margin: 12px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow:  5px 5px 5px rgb(145, 157, 250);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: center;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .action-buttons {
            float: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .action-buttons button {
            padding: 6px 10px;
            margin: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .action-buttons button:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 768px) {
            #container {
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }

            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 6px;
            }

            .action-buttons button {
                padding: 4px 8px;
                margin: 3px;
            }
        }
    </style>
</head>

<header>
    <?php include "menu.php"; ?>
</header>

<body>
    <?php
    require "koneksi.php";
    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff ORDER BY penjualan.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div id="container">
        <h1>Data Penjualan</h1>
        <form action="new-penjualan.php" method="GET">
            <div class="action-buttons">
                <button type="submit" style="text-align: left;">Tambah</button>
            </div>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Diinput oleh</th>
                <th>Waktu</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($penjualan = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $penjualan["nama_barang"] ?></td>
                    <td><?= $penjualan["jumlah"] ?></td>
                    <td><?= $penjualan["total_harga"] ?></td>
                    <td><?= $penjualan["username"] ?></td>
                    <td><?= $penjualan["created_at"] ?></td>
                    <td class="action-buttons">
                        <form action="read-penjualan.php" method="GET">
                            <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td class="action-buttons">
                        <form action="delete-penjualan.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $penjualan["id"] ?>'>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus penjualan '${id}'?`);
        }
    </script>
</body>

<footer>
    <?php include "menu-footer.php" ?>
</footer>

</html>