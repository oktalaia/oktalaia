<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>New Barang</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
            background-image: url(image/background\ barang\(1\).jpg);
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

        input[type="text"],
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
    if ($_SESSION["level"] != "admin" && $_SESSION["level"] != "logistik") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }
    ?>

    <div class="container">
        <h1>Tambah Barang</h1>
        <form action="create-barang.php" method="POST">
            <table>
                <tr>
                    <td class="label">Nama</td>
                    <td class="input"><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td class="label">Kategori</td>
                    <td class="input">
                        <select name="kategori">
                            <option value="stick">Stick</option>
                            <option value="cup">Cup</option>
                            <option value="cone">Cone</option>
                            <option value="mochi">Mochi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">Stok</td>
                    <td class="input"><input type="number" min="0" name="stok"></td>
                </tr>
                <tr>
                    <td class="label">Harga</td>
                    <td class="input"><input type="number" min="0" name="harga"></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
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