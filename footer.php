<!DOCTYPE html>
<html lang="en">
        <head>
        <!-- Tambahkan Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                        background-color: #f4f4f4;
                        padding: 20px;
                        width: 100%;
                        box-sizing: border-box;
                        align-items: center;
                        overflow: hidden;
                        border-radius: 1rem;
                        font-weight: bold;
                }

                .footer-block {
                        flex: 1;
                        margin-right: 20px;
                }

                .footer-toko {
                        display: flex;
                        justify-content: space-between;
                        /* Menempatkan elemen di antara nama toko dan judul "MASTER" di sisi kanan */
                        align-items: center;
                        /* Memastikan judul-judul toko berada pada satu tingkat vertikal */
                }

                .footer-block-title {
                        text-align: left;
                        font-size: 18px;
                        margin-bottom: 10px;
                        color: black;
                        /* Mengubah warna teks menjadi hitam */
                        font-weight: bold;
                        /* Membuat teks menjadi tebal */
                }

                .footer-links {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                        text-align: left;
                }

                .link-item {
                        margin-bottom: 5px;
                }

                .link-item a {
                        color: #666;
                        text-decoration: none;
                        transition: color 0.3s ease;
                }

                .link-item a:hover {
                        color: #000;
                }

                .footer-contact-info {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                }

                .tel,
                .email,
                .adr.has-icon {
                        color: #666;
                        margin-bottom: 5px;
                        text-align: left;
                }

                .tel i,
                .email i,
                .adr i {
                        margin-right: 5px;
                }

                .adr.has-icon {
                        display: flex;
                        align-items: center;
                }

                .adr.has-icon .icon {
                        margin-right: 10px;
                }

                .map-container {
                        width: 100%;
                        height: 200px;
                        margin-top: 20px;
                        border-radius: 12px;
                }
        </style>
</head>

<body>

        <footer>
                <div class="footer-block">
                        <h4 class="footer-block-title">DOYAN DINGIN</h4>
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
                        <h4 class="footer-block-title" style="text-align: right; margin-right: 18rem; ">HUBUNGI KAMI</h4>
                        <div class="footer-contact-info">
                                <p class="tel" style="margin-right: 3.7rem;"><i class="fa fa-phone"></i>0812 9765 5443</p>
                                <p class="email"><i class="fa fa-envelope"></i><a href="mailto:support@website.com" style="color: #000;">support@website.com</a></p>
                                <p class="adr has-icon">
                                        <i class="fa fa-map-marker icon"></i>
                                        <span class="adr-group">
                                                <span>Yayasan Pendidikan Gracia,</span><br>
                                                <span>Gg. Sereh Jl. Cibadak No.26,</span><br>
                                                <span> Cibadak, Kec. Astanaanyar,</span><br>
                                                <span>Kota Bandung, Jawa Barat 40241</span>
                                        </span>
                                </p>
                                <div class="map-container">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.734187688344!2d107.59503527410669!3d-6.922345967752884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e618a1bba3c5%3A0xf6025951993752d2!2sSekolah%20Menengah%20Pertama%20Gracia!5e0!3m2!1sen!2sid!4v1710386467397!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                        </div>
                </div>
        </footer>




</body>

</html>