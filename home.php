<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            border-radius: 8px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .content {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
            grid-column: 1 / -1;
            clear: both;
            background-color: transparent;
            margin: 3rem;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #000;
            margin-top: 0;
            /* Menghilangkan margin atas yang default */
        }

        p {
            text-align: center;
            color: #000;
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 20px;
            /* Memberikan jarak bawah */
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 2px 2px 5px 2px rgba(0, 0, 255, 0.5);
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .card img {
            width: 100%;
            height: 300px;
            display: block;
        }

        .card .caption {
            padding: 15px;
            text-align: center;
            background-color: #000;
        }

        .card p {
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>



<body>
    <header>
        <?php include "menu.php" ?>
    </header>

    <div class="content">
        <h1>SELAMAT DATANG DI TOKO DOYAN DINGIN!</h1>
        <p>
            Nikmati kesegaran dan kelezatan es krim premium kami, terbuat dari bahan-bahan berkualitas terbaik. <br>
            Dari rasa klasik hingga inovatif, kami menyajikan beragam pilihan untuk memuaskan selera Anda. <br>
            Kami bangga bisa menyediakan es krim yang tak tertandingi. <br>
            Dengan kombinasi unik rasa, tekstur yang lembut, dan sentuhan kreatif yang memikat lidah Anda. <br>
            Mari jelajahi koleksi kami dan temukan es krim impian Anda. <br>
            Jadikan setiap hari lebih istimewa dengan sejuknya sensasi es krim kami. Selamat menikmati!
        </p>
    </div>

    <div class="container">
        <div class="card" data-aos="fade-up-right" data-aos-duration="1000">
            <img src="image/sweet-corn.jpg">
            <div class="caption">
                <p>Sweet Sorn</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <img src="image/Chocolate crispy.jpg">
            <div class="caption">
                <p>Chocolate Crispy</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up-left" data-aos-duration="1000">
            <img src="image/f-bluberry.jpg">
            <div class="caption">
                <p>Fruizzy Blueberry</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up-right" data-aos-duration="1000">
            <img src="image/F-Leychee.png">
            <div class="caption">
                <p>Fruizzy Leychee</p>
            </div>
        </div>
 
        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <img src="image/Fruit Twister.png">
            <div class="caption">
                <p>Fruit Twister</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up-left" data-aos-duration="1000">
            <img src="image/mochi-vanilla.png">
            <div class="caption">
                <p>Mochi Vanilla</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up-right" data-aos-duration="1000">
            <img src="image/mochi-chocolate.png">
            <div class="caption">
                <p>Mochi Chocolate</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <img src="image/Sundae Strawberry.jpg">
            <div class="caption">
                <p>Sundae Strawberry</p>
            </div>
        </div>

        <div class="card" data-aos="fade-up-left" data-aos-duration="1000">
            <img src="image/Sundae Chocolate.png">
            <div class="caption">
                <p>Sundae Chocolate</p>
            </div>
        </div>
    </div>

    <footer>
        <?php include "footer.php" ?>
    </footer>

</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>