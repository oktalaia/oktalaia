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
            max-width: 100%;
            margin: 50px;
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
        }

        th,
        td {
            padding: 10px;
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

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .lihat {
            padding: 8px 20px;
            margin: 5px;
            background-color: #87CEFA;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
            font-weight: bold;
        }

        .lihat:hover {
            background-color: #005f7f;
        }

        /* Desain khusus untuk tombol tambah */
        .button-container button.tambah-button {
            background-color: #87CEFA;
            border: 2px solid #005f7f;
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: bold;
        }

        .button-container button.tambah-button:hover {
            background-color: #005f7f;
            border: 2px solid #005f7f;
        }

        /* Desain khusus untuk tombol print */
        .button-container button.print-button {
            background-color: #87CEFA;
            border: 2px solid #005f7f;
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: bold;
        }

        .button-container button.print-button:hover {
            background-color: #005f7f;
            border: 2px solid #005f7f;
        }
    </style>
</head>

<header>
    <?php include "menu.php" ?>
</header>

<body>



    <?php
    if ($_SESSION["level"] != "admin") {

        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }


    require "koneksi.php";


    $sql = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sql);
    ?>


    <div id="container">
        <h1>Data User</h1>
        <div class="button-container">
            <form action="new-user.php" method="GET">
                <button type="submit" class="tambah-button">Tambah</button>
            </form>
            <form action="cetakuser.php" method="GET">
                <button type="submit" class="print-button">Print</button>
            </form>
        </div>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Level</th>
                <th>Dibuat Pada</th>
                <th>Diubah Pada</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($user = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $user["username"] ?></td>
                    <td><?= $user["level"] ?></td>
                    <td><?= $user["created_at"] ?></td>
                    <td><?= $user["updated_at"] ?></td>
                    <td>
                        <form action="read-user.php" method="GET">
                            <input type="hidden" name="id" value='<?= $user["id"] ?>'>
                            <button type="submit" class="lihat">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-user.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $user["id"] ?>'>
                            <button type="submit" class="lihat">Delete</button>
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
            return confirm(`Hapus user '${id}'?`)
        }
    </script>
</body>

<footer>
    <?php include "menu-footer.php" ?>
</footer>

</html>