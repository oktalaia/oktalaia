<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script>
        function hideIcon(input) {
            const icon = input.previousElementSibling;
            if (input.value.length > 0) {
                icon.classList.add('hidden');
            } else {
                icon.classList.remove('hidden');
            }
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h1>Selamat Datang!</h1>
        <form action="validasi.php" method="POST">
            <div class="input-container">
                <label for="username">Username</label>
                <div class="icon-input">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" id="username" onfocus="hideIcon(this)" onblur="hideIcon(this)" required>
                </div>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <div class="icon-input">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" onfocus="hideIcon(this)" onblur="hideIcon(this)" required>
                </div>
            </div>
            <div class="button-container">
                <button type="submit">LOGIN</button>
                <button type="reset">CLEAR</button>
            </div>
        </form>
    </div>
</body>
</html>