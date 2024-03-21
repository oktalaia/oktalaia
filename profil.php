<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(image/profil.jpg);
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
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"],
        button[type="reset"] {
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
            border: 2px solid #005f7f;
        }

        button[type="submit"]:hover,
        button[type="reset"]:hover {
            background-color: #005f7f;
        }

        .button-container {
            text-align: center;
        }
    </style>
</head>

<header>
    <?php include "menu.php"; ?>
</header>

<body>
    <?php

    require "koneksi.php";

    $id = $_SESSION["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>
    <div class="container">
        <h1>Profil</h1>
        <form action="update-profil.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input readonly type="text" name="username" value="<?= $user["username"] ?>"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td><input readonly type="text" name="level" value="<?= ucwords($_SESSION["level"]) ?>"></td>
                </tr>
                <tr>
                    <td>Password baru</td>
                    <td><input required type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td>Ulangi Password Baru</td>
                    <td><input required type="password" name="confirm_password"></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container"> <!-- Menggunakan class button-container -->
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