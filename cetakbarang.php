<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            padding: 10px;
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
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <?php
    require "koneksi.php";
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div id="container">
        <h1>LAPORAN DATA BARANG</h1>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Dibuat pada</th>
                <th>Diubah pada</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($barang = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $barang["nama"] ?></td>
                    <td><?= $barang["kategori"] ?></td>
                    <td><?= $barang["stok"] ?></td>
                    <td><?= $barang["harga"] ?></td>
                    <td><?= $barang["created_at"] ?></td>
                    <td><?= $barang["updated_at"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>

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
