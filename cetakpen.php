<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
        }

        button {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <?php
    require "koneksi.php";
    $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff ORDER BY penjualan.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>
    <h2>Laporan Penjualan</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Diinput oleh</th>
            <th>Waktu</th>
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
            <?php $i++; ?>
        <?php endwhile ?>
    </table>
    <script>
        window.onload = function() {
            printData();
        }

        function printData() {
            window.print();
        }
    </script>
</body>

</html>