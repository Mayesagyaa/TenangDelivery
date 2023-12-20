<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tenang Delivery - Your Food Delivery Service">
    <meta name="author" content="Your Name">
    <title>Tenang Delivery</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/tenang.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    
    <!-- CSS Khusus untuk tampilan mobile -->
    <style>
 /* Media query untuk tampilan mobile (lebar maksimum 600px) */
        @media (max-width: 600px) {
            /* Navbar */
            .navbar-nav {
                margin-top: 10px;
            }

            .navbar-toggler-icon {
                background-color: #000;
            }

            /* Hero Section */
            .hero-section {
                padding-top: 80px;
            }

            .hero-section h1 {
                font-size: 24px;
            }

            .hero-section h2 {
                font-size: 16px;
            }

            /* Tombol Grup */
            .custom-btn-group {
                margin-top: 20px;
            }

            .custom-btn-group a {
                font-size: 14px;
                padding: 10px 20px;
            }

            .googleplay a {
                font-size: 12px;
                margin-top: 10px;
            }

            /* About Section */
            .about-section h3 {
                font-size: 24px;
            }

            /* Foto Section */
            .foto-section2 img {
                max-width: 100%;
            }

            /* Katakata Section */
            .katakata-section2 h5 {
                font-size: 16px;
            }

            .katakata-section2 p {
                font-size: 14px;
            }

            /* Section Background Image */
            .section-bg-image h2 {
                font-size: 20px;
            }

            /* Gambar Section */
            .img2 img {
                max-width: 100%;
                height: auto;
            }

            /* Membership Section */
            .membership-section h2 {
                font-size: 20px;
            }

            .table-responsive {
                margin-top: 20px;
            }

            .table th,
            .table td {
                font-size: 14px;
            }

            /* Services Section */
            .services-section h2 {
                font-size: 20px;
            }

            /* Circle Container */
            .circle-container {
                flex-direction: column;
            }

            .circle {
                margin: 10px 0;
            }

            .circle i {
                font-size: 24px;
            }

            /* Popup Content */
            .popup-content h2 {
                font-size: 16px;
            }

            .popup-description-catering,
            .popup-description-birthday-cake,
            .popup-description-bakery,
            .popup-description-hampers,
            .popup-description-frozen-food {
                font-size: 14px;
            }

            /* Card Simulasi */
            .card-simulasi {
                padding: 20px;
                margin-top: 20px;
            }

            .card-simulasi-title {
                font-size: 18px;
            }

            .form-group label {
                font-size: 14px;
            }

            .form-control {
                font-size: 14px;
            }

            .card-image-simulasi {
                max-width: 50px;
            }

            .inner-card h5 {
                font-size: 14px;
            }

            .inner-card p {
                font-size: 14px;
            }

            /* Contact Section */
            .contact-section h3 {
                font-size: 20px;
            }

            .form-label {
                font-size: 14px;
            }

            .form-control {
                font-size: 14px;
            }

            .tombol1,
            .tombol2 {
                font-size: 14px;
                padding: 10px 20px;
            }

            /* Footer Section */
            .footer-section h3 {
                font-size: 16px;
            }

            .footer-section p {
                font-size: 14px;
            }

            .footer-section a {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" class="navbar-brand-image">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="expanded" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll smoothscroll" href="#section_2">Tentang Kami</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll smoothscroll" href="#section_3">Panduan penggunaan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll smoothscroll" href="#section_4">Keunggulan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll smoothscroll" href="#section_5">Paket Layanan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll smoothscroll" href="#section_6">Simulasi Jarak</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll smoothscroll" href="#section_7">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="section-overlay"></div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#069BA3" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
                </path>
            </svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6  mb-5 mb-lg-0">
                        <h1 class="text-tenang">Tenang Delivery</h1>
                        <h2 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span>Solusi pengriman</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Terpercaya</b>
                                <b>Hemat</b>
                                <b>Aman</b>
                                <b>Mudah</b>
                            </span>
                        </h2>

                        <div class="custom-btn-group">
                            <a href="#section_6" class="btn custom-btn smoothscroll me-3">Daftar Sekarang</a>
                            <!-- <a class="btn custom-btn smoothscroll me-3"><img src="assets/images/logo.png" alt=""></a> -->

                            <a href="#section_6" class="link smoothscroll">Simulasi Jarak</a>
                        </div>
                        <div class="googleplay">
                            <a class="text margin-left-3">Segera Hadir di <br> <img
                                    src="{{ asset('assets/images/playstore2.svg') }}"></a>
                        </div>
                    </div>
                    <div class="wave"></div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </section>

        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h3 class="mb-lg-5 mb-4 text-center">Driver <b style="color: teal;">Senang</b>, Pelanggan <b
                                style="color: teal;">Tenang</b></h3>
                    </div>

                    <div class="foto-section2">
                        <div class="member-block">
                            <div class="member-block-image-wrap">
                                <img src="{{ asset('assets/images/tejo-senang.jpg') }}"
                                    class="member-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="katakata-section2">
                        <h5 class="mb-3">Apakah 1 driver bisa mengantar ke banyak lokasi?</h5>
                        <p><strong style="color: teal;">TENTU BISA</strong>, <b style="color: teal;">1 DRIVER</b> bisa
                            untuk <b style="color: teal;">1 PICKUP</b> dengan <b style="color: teal;"></b> lokasi </p>
                    </div>


                </div>
            </div>
        </section>


        <section class="section-bg-image" id="section_3">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="section-bg-image-block">
                            <!-- <h2 class="mb-lg-3 text-center ">Bagaimana Cara Order?</h2> -->

                            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                                <div class="col">
                                    <div class="img2">
                                        <img src="{{ asset ('assets/images/cara-penggunaan.svg') }}" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                    stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)"
                    d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
                <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                    stroke-width="0"></path>
            </svg>
        </section>


        <section class="membership-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4  ">
                        <h2><span>Keunggulan</span> Tenang Delivery</h2>
                    </div>

                    <div class="col-lg-12 col-12 mb-3 mb-lg-0 ">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead style="text-align: center;">
                                    <tr>
                                        <div class="section_4">
                                            <th style="width: 34%; color: #ffff; font-size: 23px;">Keunggulan</th>
                                            <th><img src="{{asset('assets/images/5star.png')}}" alt=""></th>
                                            <th style="width: 34%; color: #ffff; font-size: 23px;"> Testimoni</th>
                                        </div>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center" style="font-size: 20px;">Hemat<img
                                                src="{{asset ('assets/images/hemat.svg') }}" alt="" class="icon-table">
                                        </th>
                                        </th>

                                        <td>
                                            <i><img src="{{asset ('assets/images/Vector.svg') }}" alt=""></i>
                                        </td>
                                        <td>
                                            <p><b>Riza rahma :</b></p>
                                            <p>... platform delivery yang amanah dengan harga terjangkau ...</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center" style="font-size: 20px;">Aman<img
                                                src="{{asset ('assets/images/time-fast.svg') }}" alt=""
                                                class="icon-table">
                                        </th>

                                        <td>
                                            <i><img src="{{ asset ('assets/images/Vector.svg') }}" alt=""></i>
                                        </td>
                                        <td>
                                            <p><b>Ulfa amelia :</b></p>
                                            <p>... sangat aman & bikin tenang banget saat kirim kue ulang tahun ke
                                                customer ...</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center" style="font-size: 20px;">Mudah<img
                                                src="{{asset ('assets/images/icon-hand.svg')}}" alt=""
                                                class="icon-table">
                                        <td>
                                            <i><img src="{{asset ('assets/images/Vector.svg') }}" alt=""></i>
                                        </td>
                                        <td>
                                            <p><b>Kamaludin enuh :</b></p>
                                            <p>... 80 box nasi di bawa sama drivernya. Thanks tenang ...</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="services-section" id="section_5">
            <div class="container-paket-pelayanan">
                <h2 class="section-title">Paket Layanan</h2>
                <div class="circle-container">
                    <!-- Circle untuk layanan Katering -->
                    <div class="circle" id="catering">
                        <i class="fas fa-utensils fa-3x"></i>
                        <br>
                        <h5 style="color: white;">Catering</h5>
                    </div>
                    <!-- Circle untuk layanan Kue Ulang Tahun -->
                    <div class="circle" id="birthday-cake">
                        <i class="fas fa-birthday-cake fa-3x"></i>
                        <br>
                        <h5 style="color: white;">Kue Ulang Tahun</h5>
                    </div>
                    <!-- Circle untuk layanan Bakery -->
                    <div class="circle" id="bakery">
                        <i class="fas fa-bread-slice fa-3x"></i>
                        <br>
                        <h5 style="color: white;">Bakery</h5>
                    </div>
                    <!-- Circle untuk layanan Hampers -->
                    <div class="circle" id="hampers">
                        <i class="fas fa-gift fa-3x"></i>
                        <br>
                        <h5 style="color: white;">Hampres</h5>
                    </div>
                    <!-- Circle untuk layanan Frozen Food -->
                    <div class="circle" id="frozen-food">
                        <i class="fas fa-snowflake fa-3x"></i>
                        <br>
                        <h5 style="color: white;">Frozen Food</h5>
                    </div>
                </div>
            </div>

            <!-- Popup Penjelasan -->
            <div class="popup" id="popup-catering">
                <div class="popup-content">
                    <h2 id="popup-title-catering">Layanan Katering</h2>
                    <img class="popup-image" id="popup-image-catering"
                        src="{{ asset('assets/images/tumpeng-mini.jpg') }}" alt="Gambar Layanan Katering">
                    <p id="popup-description-catering">Kami menyediakan layanan katering dengan berbagai pilihan menu
                        yang lezat. Hubungi kami untuk pesanan katering Anda!</p>
                    <button id="popup-close-catering">Tutup</button>
                </div>
            </div>


            <div class="popup" id="popup-birthday-cake">
                <div class="popup-content">
                    <h2 id="popup-title-birthday-cake">Layanan Kue Ulang Tahun</h2>
                    <img class="popup-image" id="popup-image-birthday-cake"
                        src="{{ asset('assets/images/kue-ulangtahun.jpg') }}" alt="Gambar Layanan Kue Ulang Tahun">
                    <p id="popup-description-birthday-cake">Pesan kue ulang tahun spesial untuk momen istimewa Anda. Kue
                        kami selalu segar dan lezat!</p>
                    <button id="popup-close-birthday-cake">Tutup</button>
                </div>
            </div>

            <div class="popup" id="popup-bakery">
                <div class="popup-content">
                    <h2 id="popup-title-bakery">Layanan Bakery</h2>
                    <img class="popup-image" id="popup-image-bakery" src="{{ asset('assets/images/roti.jpg') }}"
                        alt="Gambar Layanan Bakery">
                    <p id="popup-description-bakery">Nikmati berbagai pilihan roti, kue, dan pastry dari bakery kami.
                        Kelezatan di setiap gigitan!</p>
                    <button id="popup-close-bakery">Tutup</button>
                </div>
            </div>

            <div class="popup" id="popup-hampers">
                <div class="popup-content">
                    <h2 id="popup-title-hampers">Layanan Hampers</h2>
                    <img class="popup-image" id="popup-image-hampers" src="{{ asset('assets/images/hampers.jpg') }}"
                        alt="Gambar Layanan Hampers">
                    <p id="popup-description-hampers">Pesan hampers spesial untuk orang yang Anda cintai. Hampers kami
                        berisi berbagai produk berkualitas.</p>
                    <button id="popup-close-hampers">Tutup</button>
                </div>
            </div>

            <div class="popup" id="popup-frozen-food">
                <div class="popup-content">
                    <h2 id="popup-title-frozen-food">Layanan Frozen Food</h2>
                    <img class="popup-image" id="popup-image-frozen-food"
                        src="{{ asset('assets/images/frozen-food.jpg') }}" alt="Gambar Layanan Frozen Food">
                    <p id="popup-description-frozen-food">Bekukan momen Anda dengan makanan beku kami yang lezat. Mudah
                        disiapkan, nikmat untuk dinikmati!</p>
                    <button id="popup-close-frozen-food">Tutup</button>
                </div>
            </div>
        </section>

        <section class="events-section section-bg section-padding" id="section_6">
            <div class="">
                <h2 class="mb-lg-3 text-start">Simulasi Jarak <img src="{{asset ('assets/images/sepeda.svg') }}" alt=""
                        style="width: 89px;
                            height: 87px; flex-shrink: 0;"></h2>
            </div>
            <div class="container-simulasi">
                <div>
                    <?php if(!isset($jarak)) { ?>
                    <div class="card-simulasi" id="card1">
                        <h2 class="card-simulasi-title" style="text-align: center;">Masukan nama kota </h2>
                        <br>
                        <form method="POST" action="/perhitungan/hitung">
                            @csrf
                            <div class="form-group">
                                <label for="lokasi">Masukkan lokasi anda </label>
                                <select name="lokasi" id="lokasi" required>
                                    <option value="jl_sono_kembang">Jl. Sono Kembang</option>
                                    <option value="kelapa_dua">Kelapa Dua</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Masukkan tujuan anda </label>
                                <select name="tujuan" id="tujuan" required>
                                    <option value="margonda">Margonda</option>
                                    <option value="cilodong">Cilodong</option>
                                </select>
                            </div>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                    <?php }else{ ?>
                </div>
                <div id="card2">
                    <div class="outer-card">
                        <img class="card-image-simulasi" src="{{ asset('assets/images/sepeda.svg') }}" alt="Gambar 1">
                        <div class="inner-card">
                            <h5>Jarak</h5>
                            <p>{{ $jarak }} Km</p> <!-- Menampilkan nilai jarak dari controller -->
                            <hr id="">
                            <h5>Biaya ojek</h5>
                            <p>Rp {{ number_format($biaya, 0, ',', '.') }}</p>
                            <!-- Menampilkan biaya dari controller -->
                            <hr id="">
                        </div>
                    </div>
                    <a href="/perhitungan"><button>Back</button></a>
                </div>
                <?php } ?>
            </div>

            </div>
        </section>


        <section class="contact-section section-padding" id="section_7">
            <div class="container-gambar">
                <div class="card">
                    <form id="whatsappForm">
                        <div class="mb-">
                            <h3>Daftar Sekarang</h3>
                            <label for="name" class="form-label">Nama</label>
                            <input style="background: rgba(6, 155, 163, 0); border-radius: 25px;" type="text"
                                class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-">
                            <label for="phoneNumber" class="form-label">WhatsApp</label>
                            <input style="background:  rgba(6, 155, 163, 0); border-radius: 25px;" type="text"
                                class="form-control" id="phoneNumber" name="phoneNumber">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <input style="background:  rgba(6, 155, 163, 0); border-radius: 25px;" type="text"
                                class="form-control" id="city" name="city">
                        </div>
                        <button class="tombol1" type="button" onclick="generateWhatsAppLinkAndOpen1()">Daftar
                            Member</button>
                        <br>
                        <button class="tombol2" type="button" onclick="generateWhatsAppLinkAndOpen()">Kirim barang via
                            WhatsApp</button>
                </div>
                <div class="gambar mr-5">
                    <img src="{{ asset ('assets/images/tejo-footer.svg') }}" alt="huhu">
                </div>
                <div class="social-media">
                    <div class="d-flex flex-row">
                        <a href="https://wa.me/6285959868653" class="btn btn-teal-outline me-2"><i
                                class="bi bi-whatsapp"></i> WhatsApp</a>
                        <a href="https://www.instagram.com/tenang.fooddelivery/" class="btn btn-teal-outline me-2"><i
                                class="bi bi-instagram"></i> Instagram</a>
                        <a href="https://www.tiktok.com/your-tiktok-link" class="btn btn-teal-outline"><i
                                class="bi bi-tiktok"></i> TikTok</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#069BA3" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/click-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/animated-headline.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Load Font Awesome icons using a CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Load Popper.js and Bootstrap.js using a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
</body>

</html>
