<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Read User</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-image: url(image/user\(1\).jpg);
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
        }

        td.input,
        td.input-p {
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

<body>
    <header>
        <?php include "menu.php"; ?>
    </header>

    <?php
    if ($_SESSION["level"] != "admin") {
        echo "Anda tidak dapat mengakses halaman ini";
        exit;
    }

    require "koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <h1>Edit User</h1>

        <form action="update-user.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="hidden" name="old_password" value="<?= $user["password"] ?>">

            <table>
                <tr>
                    <td class="label">Username</td>
                    <td class="input"><input type="text" name="username" value="<?= $user["username"] ?>"></td>
                </tr>
                <tr>
                    <td class="label">Password</td>
                    <td class="input"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td class="label">Level</td>
                    <td class="input">
                        <select name="level">
                            <option value="admin" <?= $user["level"] == "admin" ? "selected" : "" ?>>ADMIN</option>
                            <option value="keuangan" <?= $user["level"] == "keuangan" ? "selected" : "" ?>>KEUANGAN</option>
                            <option value="logistik" <?= $user["level"] == "logistik" ? "selected" : "" ?>>LOGISTIK</option>
                        </select>
                    </td>
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

    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>

</html>