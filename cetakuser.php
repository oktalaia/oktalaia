<!DOCTYPE html>
<html>

<head>
    <title>User</title>
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

    $sql = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div id="container">
        <h1>LAPORAN DATA USER</h1>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Level</th>
                <th>Dibuat Pada</th>
                <th>Diubah Pada</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($user = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $user["username"] ?></td>
                    <td><?= $user["level"] ?></td>
                    <td><?= $user["created_at"] ?></td>
                    <td><?= $user["updated_at"] ?></td>
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
