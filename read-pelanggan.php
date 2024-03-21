<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Read Pelanggan</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
            background-image: url(image/tambah\ pelanggan\(1\).jpg);
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

        td.label {
            padding: 10px;
        }

        td.input {
            padding: 10px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            text-transform: uppercase;
            /* Convert text to uppercase */
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .edit-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            background-color: #87CEFA;
            color: black;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            /* Remove underline */
            border: 2px solid #005f7f;
        }

        .edit-button:hover {
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

    $sql = "SELECT * FROM pelanggan WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    $pelanggan = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <h1>Edit Pelanggan</h1>
        <form action="update-pelanggan.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <table>
                <tr>
                    <td class="label">Nama</td>
                    <td class="input"><input type="text" name="nama" value="<?= $pelanggan["nama"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Alamat</td>
                    <td class="input"><input type="text" name="alamat" value="<?= $pelanggan["alamat"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Nomor Telepon</td>
                    <td class="input"><input type="text" name="no_telepon" value="<?= $pelanggan["no_telepon"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <a href="update-pelanggan.php?id=<?= $id ?>"><button type="button" class="edit-button">Edit</button></a>
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