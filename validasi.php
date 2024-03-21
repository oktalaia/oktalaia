<?php
require "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE username = ?";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user["password"])) {
        session_start();
        $_SESSION["id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["level"] = $user["level"];
        header("location: home.php");
        exit(); // Terminate script execution after redirection
    } else {
        session_start();
        $_SESSION["error_message"] = "Username atau Password tidak valid";
        echo "Error Message: " . $_SESSION["error_message"]; // Check if error message is set
        header("location: login.php");
        exit();
    }
} else {
    session_start();
    $_SESSION["error_message"] = "Username tidak ditemukan";
    echo "Error Message: " . $_SESSION["error_message"]; // Check if error message is set
    header("location: login.php");
    exit();
}
