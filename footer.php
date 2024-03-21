<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Tambahkan Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <style>
                body {
                        margin: 0;
                        padding: 0;
                        height: 100%;
                }

                footer {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        align-items: flex-start;
                        background-color: #0c3178CC;
                        padding: 2px;
                        width: 100%;
                        box-sizing: border-box;
                        overflow: hidden;
                        border-radius: 1rem;
                        font-weight: bold;
                        /* Tambahkan properti CSS untuk konten di tengah halaman */
                        display: flex;
                        justify-content: center;
                }

                .footer-block {
                        flex: 1;
                        margin-right: 50px;
                        margin-left: 50px;
                }

                .footer-sosial {
                        flex: 1;
                        margin-right: 20px;
                        margin-left: 20px;
                }

                .footer-toko {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                }

                .footer-block-title {
                        text-align: left;
                        font-size: 18px;
                        margin-bottom: 10px;
                        color: #ffffff;
                        font-weight: bold;
                }

                .footer-links,
                .footer-links-sosial {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                        text-align: left;
                }

                .link-item {
                        margin-bottom: 5px;
                }

                .link-item a {
                        color: #ffffff;
                        text-decoration: none;
                        transition: color 0.3s ease;
                }

                .link-item a:hover {
                        background: linear-gradient(to right, #ffffff, #3ba1ea);
                        /* Menggunakan efek gradasi yang sama dengan teks */
                        background-clip: text;
                        -webkit-text-fill-color: transparent;
                }

                .footer-contact-info {
                        text-align: center;
                        /* Mengatur agar konten berada di tengah */
                }



                .footer-contact-info p {
                        margin-bottom: 5px;
                }

                .adr-group {
                        margin-bottom: 10px;
                        color: #ffffff;
                }

                .tel,
                .email,
                .adr.has-icon {
                        margin-right: 5px;
                        text-align: left;
                }

                .tel i,
                .email i,
                .adr i {
                        margin-right: 5px;
                }

                .adr.has-icon {
                        display: flex;
                        text-align: left;
                }

                .adr.has-icon .icon {
                        margin-right: 10px;
                }

                .map-container {
                        width: 100%;
                        height: 300px;
                        margin-top: 20px;
                        border-radius: 12px;
                }

                .copywrite {
                        text-align: center;
                        padding: 10px;
                        color: #fff;
                        font-family: "Poppins", sans-serif;
                        font-size: 14px;
                }

                .copywrite a {
                        color: #fff;
                        text-decoration: none;
                }

                .copywrite a:hover {
                        text-decoration: underline;
                }

                /* Tambahkan kelas CSS untuk teks putih */
                .white-text {
                        color: #ffffff;
                        /* Warna putih */
                }

                /* Tambahkan aturan CSS untuk mengatur warna ikon */
                .white-text .fa {
                        color: #000;
                        /* Warna hitam */
                }
        </style>
</head>

<body>

        <footer data-aos="fade-up" data-aos-duration="2000">
                <div class="footer-block">
                        <h4 class="footer-block-title" style="padding-top: 45px;">DOYAN DINGIN</h4>
                </div>
                <div class="footer-block">
                        <h4 class="footer-block-title">MASTER</h4>
                        <ul class="footer-links">
                                <li class="link-item"><i class="fa fa-caret-right" style="color: #000;"></i><a href="user.php">USER</a></li>
                                <li class="link-item"><i class="fa fa-caret-right" style="color: #000;"></i><a href="barang.php">BARANG</a></li>
                                <li class="link-item"><i class="fa fa-caret-right" style="color: #000;"></i><a href="pelanggan.php">PELANGGAN</a></li>
                        </ul>
                </div>

                <div class="footer-block">
                        <h4 class="footer-block-title">TRANSAKSI</h4>
                        <div>
                                <ul class="footer-links">
                                        <li class="link-item"><i class="fa fa-caret-right" style="color: #000;"></i><a href="penjualan.php">PENJUALAN</a></li>
                                </ul>
                        </div>
                </div>

                <div class="footer-block">
                        <h4 class="footer-block-title">Sosial Media</h4>
                        <div>
                                <ul class="footer-links">
                                        <li class="link-item"><a href="https://www.instagram.com/"><i class="fab fa-instagram" style="color: #000;"></i> Instagram</a></li>
                                        <li class="link-item"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="color: #000;"></i> Facebook</a></li>
                                        <li class="link-item"><a href="https://twitter.com/"><i class="fab fa-twitter" style="color: #000;"></i> Twitter</a></li>
                                </ul>
                        </div>
                </div>

                <div class="footer-contact-container"> <!-- Menambahkan class baru -->
                        <h4 class="footer-block-title" style="margin-right: 2rem;">HUBUNGI KAMI</h4>
                        <div class="footer-contact-info">
                                <!-- Menambahkan kelas white-text untuk teks putih -->
                                <p class="tel white-text"><i class="fa fa-phone"></i>+92 812 9765 5443</p>
                                <p class="email white-text"><i class="fa fa-envelope"></i><a href="https://mail.google.com/mail/u/0/#inbox" style="color: #ffffff;">doyandingin23@gmail.com</a></p>
                                <p class="adr has-icon">
                                        <i class="fa fa-map-marker icon"></i>
                                        <span class="adr-group">
                                                <span>Yayasan Pendidikan Gracia,</span><br>
                                                <span>Gg. Sereh Jl. Cibadak No.26,</span><br>
                                                <span>Cibadak, Kec. Astanaanyar,</span><br>
                                                <span>Kota Bandung, Jawa Barat 40241</span>
                                        </span>
                                </p>
                        </div>
                </div>

                <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.734187688344!2d107.59503527410669!3d-6.922345967752884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e618a1bba3c5%3A0xf6025951993752d2!2sSekolah%20Menengah%20Pertama%20Gracia!5e0!3m2!1sen!2sid!4v1710386467397!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br>
                <br>


        </footer>
        <div class="footer-block">
                <div class="copywrite">
                        <p>&copy; <span id="currentYear"></span> Doyan Dingin. Hak Cipta Dilindungi Undang-Undang.</p>
                </div>
        </div>

        <script>
                // Get the current year
                var currentYear = new Date().getFullYear();

                // Set the current year to the element with id "currentYear"
                document.getElementById("currentYear").innerHTML = currentYear;
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
                AOS.init();
        </script>

</body>

</html>