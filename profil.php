<?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $id = $_SESSION["id"];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    $user = mysqli_fetch_array($query);
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #111;
    margin: 0;
    padding: 0;
}

div {
    max-width: 600px;
    margin: 20px auto;
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

td {
    padding: 10px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 8px 15px;
    margin-right: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

    </style>
</head>

<body>
    

    <div>
        <form action="update-profil.php" method="POST">
            <h1>Profil</h1>

            <input type="hidden" name="id" value="<?= $id ?>">

            <table>
                <tr>
                    <td>Username</td>
                    <td><input readonly type="text" name="username" value="<?= $user["username"] ?>"></td>
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
                    <td colspan="2">
                        <button type="submit">SIMPAN</button>
                        <button type="reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>