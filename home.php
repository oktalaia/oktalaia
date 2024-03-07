<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 3rem;
            padding: 0;
        }

        .container {
            margin: 50px;
            padding: 20px;
            background-color: #111;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            box-shadow: 2px 2px 5px 2px rgba(0, 0, 255, 0.5);
        }

        .content{
            grid-column: 1 / -1;
            clear: both;
            background-color: #111;
            margin: 3rem;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-top: 0;
            /* Menghilangkan margin atas yang default */
        }

        p {
            text-align: center;
            color: #fff;
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 20px;
            /* Memberikan jarak bawah */
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: 300px;
            display: block;
        }

        .card .caption {
            padding: 15px;
            text-align: center;
            background-color: #f5f5f5;
        }

        .card p {
            color: #000;
            font-weight: bold;
        }
    </style>
</head>

<header>
    <?php include "menu.php" ?>
</header>

<body>
    <div class="content">
        <h1>SELAMAT DATANG <?= strtoupper($_SESSION["username"]) ?>!</h1>
        <p>This is your personalized website where you can manage various aspects of your business.</p>
    </div>
    <div class="container">
        <div class="card">
            <img src="image/sweet-corn.jpg">
            <div class="caption">
                <p>Es Sweet Sorn</p>
            </div>
        </div>

        <div class="card">
            <img src="image/mochi-vanilla.png">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/mochi-chocolate.png">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/f-bluberry.jpg">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/F-Leychee.png">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/background.jpg">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/background.jpg">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/background.jpg">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <div class="card">
            <img src="image/background.jpg">
            <div class="caption">
                <p>Caption Anda disini</p>
            </div>
        </div>

        <!-- Tambahkan card lainnya di sini -->
    </div>
</body>

<footer>
    <?php include "menu-footer.php" ?>
</footer>

</html>