<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Kelas</title>

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url(); ?>/assets/img/logo.png">
    <link rel="apple-touch-icon" href="<?= base_url(); ?>/assets/img/logo.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Vendor css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/icofont/icofont.min.css">

    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/catalog.css">

</head>

<body>

    <!-- header -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo mr-auto">GnL</a>
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo2.png" alt="" class="img-fluid"></a> -->

            <!-- <a href="#" class="drop-down get-started-btn scrollto bx bx-user"></a> -->

            <nav class="nav-menu d-lg-block">
                <ul>
                    <li class="drop-down get-started-btn scrollto bx bx-user">
                        <ul>
                            <li><a href="<?= base_url('user'); ?>" class="bx bx-user"> Profil</a></li>
                            <li><a href=<?= base_url('auth/logout'); ?> class="bx bx-exit"> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </header>
    <!-- end header -->

    <!-- hero -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Mari Ciptakan Masa Depan Kreatif Dengan Inovasi</h1>
                    <h2>Mari bangunkan semangat kreatif para jiwa muda dengan belajar design dan editing</h2>
                    <div class="d-lg-flex">
                        <a href="#about" class="btn-get-started scrollto">Ayo Mulai</a>
                        <a href="https://www.youtube.com/watch?v=tWpxuukiwTs" class="btn-watch-video" data-vbtype="video" data-autoplay="true"> Tonton video <i class="bx bx-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/undraw_Outer_space_drqu.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- end hero -->

    <main id="main">

        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-left justify-content-center">
                        <i class="bx bx-time"> 15 Menit / Video </i>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-left justify-content-center">
                        <i class="bx bx-play"> 40 Episode </i>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-left justify-content-center">
                        <i class="bx bx-brush"> Design Editing </i>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-left justify-content-center">
                        <i class="bx bx-file"> Premium Template </i>
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= Course Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kelas</h2>
                    <div class="konten">

                        <div class="row elcard-container">

                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card" style="width: 18rem;">
                                    <a href="<?= base_url('catalog/course/ilustrator/free'); ?>">
                                        <img src="assets/img/course/Membuat Logo Vintage Adventure-02.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Adobe Ilustrator [Pemula]</h5>
                                            <p class="card-text">Dasar pembelajaran design vector menggunakan adobe ilustrator.</p>
                                            <div class="status">Gratis</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card" style="width: 18rem;">
                                    <a href="<?= base_url('catalog/course/ilustrator/premium'); ?>">
                                        <img src="assets/img/course/Membuat Modern Gradient Logo.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Adobe Ilustrator [Lanjutan]</h5>
                                            <p class="card-text">Dasar pembelajaran design vector menggunakan adobe ilustrator Lanjutan.</p>
                                            <div class="status2">Premium</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card" style="width: 18rem;">
                                    <a href="<?= base_url('catalog/course/photoshop/free'); ?>">
                                        <img src="assets/img/course/Membuat Effect Electric.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Adobe Photoshop [Pemula]</h5>
                                            <p class="card-text">Dasar pembelajaran photo editing menggunakan adobe photoshop.</p>
                                            <div class="status">Gratis</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card" style="width: 18rem;">
                                    <a href="<?= base_url('catalog/course/photoshop/premium'); ?>">
                                        <img src="assets/img/course/Membuat Design Glow In The Dark.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Adobe Photoshop [Lanjutan]</h5>
                                            <p class="card-text">Dasar pembelajaran Photo editing menggunakan adobe photoshop lanjut .</p>
                                            <div class="status2">Premium</div>
                                        </div>
                                    </a>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card" style="width: 18rem;">
                                    <a href="<?= base_url('catalog/template/2'); ?>">
                                        <img src="assets/img/course/Cutie.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Free Template</h5>
                                            <p class="card-text">Template design editing siap pakai.</p>
                                            <div class="status">Gratis</div>
                                        </div>
                                    </a>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card" style="width: 18rem;">
                                    <a href="<?= base_url('catalog/template/3'); ?>">
                                        <img src="assets/img/course/Cutie.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Premium Template</h5>
                                            <p class="card-text">Template design editing premium siap pakai.</p>
                                            <div class="status2">Premium</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card card-2" style="width: 18rem;">
                                    <a href="#">
                                        <img src="assets/img/course/coming-soon-hour-glass-4721933_1920.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">New Inkscape Series [Pemula]</h5>
                                            <p class="card-text">Dasar pembelajaran design vector menggunakan Inkscape untuk pemula.</p>
                                            <div class="status">Gratis</div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card card-2" style="width: 18rem;">
                                    <a href="#">
                                        <img src="assets/img/course/coming-soon-hour-glass-4721933_1920.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">New Infinite Design [Pemula]</h5>
                                            <p class="card-text">Dasar pembelajaran design vector menggunakan Infinte Design.</p>
                                            <div class="status2">Premium</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 elcard-item">
                                <div class="card card-2" style="width: 18rem;">
                                    <a href="#">
                                        <img src="assets/img/course/coming-soon-hour-glass-4721933_1920.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">New Corel Draw [Pemula]</h5>
                                            <p class="card-text">Dasar pembelajaran design vector menggunakan Corel Draw.</p>
                                            <div class="status2">Premium</div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            </div>


            </div>
        </section>
        <!-- End About Us Section -->

    </main>
    <!-- End main -->

    <div id="preloader"></div>

    <!-- Vendor js -->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>

    <!-- my js  -->
    <script src="assets/js/catalog.js"></script>

</body>

</html>