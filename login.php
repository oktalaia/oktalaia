<?php
session_start();

// Check if there's an error message in session
$error_message = isset($_SESSION["error_message"]) ? $_SESSION["error_message"] : "";
// Clear the error message from session to prevent it from persisting
unset($_SESSION["error_message"]);
?>

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

        // Function to hide error message after 2 seconds
        setTimeout(function() {
            var errorMessage = document.querySelector('.error-message');
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 1000); // Set timeout for 2 seconds
    </script>
</head>

<body>
    <div class="login-container">
        <?php if (!empty($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?>
                <i class="fas fa-exclamation-circle error-icon"></i>
            </div>
        <?php endif; ?>
        <h1>SILAHKAN LOGIN!</h1>
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