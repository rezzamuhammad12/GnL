<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

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
            <a href="<?= base_url('/catalog'); ?>" class="logo2 mr-auto bx bx-left-arrow-circle"></a>
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo2.png" alt="" class="img-fluid"></a> -->

            <!-- <a href="#" class="drop-down get-started-btn scrollto bx bx-user"></a> -->

            <nav class="nav-menu d-lg-block">
                <ul>
                    <li class="drop-down get-started-btn scrollto bx bx-user">
                        <ul>
                            <li><a href="profil.html" class="bx bx-user"> Profil</a></li>
                            <li><a href="index.html" bx bx-exit"> Keluar</a></li>
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

                <div class="col-lg-5 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Semua ilmu berasal dari rasa ingin tahu yang tinggi.</h1>
                    <h2>Yuk perbanyak referensi untuk menggali potensi diri</h2>>
                </div>

                <div class="col-lg-7 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Hisrc5rbjI4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/P97w-_p4EDU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>

            </div>
        </div>

    </section>
    <!-- end hero -->

    <main id="main">

        <!-- ======= Course Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Series</h2>
                    <div class="kelas">
                        <div class="row">

                            <!-- <div class="col-lg-6 herovid" data-aos="zoom-in" data-aos-delay="200">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/P97w-_p4EDU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div> -->

                            <?php if ($user['role_id'] == 3 && $kelas == 3) : ?>
                                <iframe src="https://drive.google.com/embeddedfolderview?id=1usxJLRCPRfbxxK03CSfWzM28PCWagpsu#list" width="200" height="500" frameborder="0"></iframe>
                            <?php elseif ($user['role_id'] != 3 && $kelas == 3) : ?>
                                <img src="<?= base_url(); ?>/assets/img/course/coming-soon-hour-glass-4721933_1920.png" class="card-img-top" alt="...">
                            <?php else : ?>
                                <iframe src="https://drive.google.com/embeddedfolderview?id=11awZ85hol3sfHXdAi7xbsMBzdup2rLvW#list" width="200" height="400" frameborder="0"></iframe>
                            <?php endif; ?>
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
    <script src="<?= base_url(); ?>/assets/js/catalog.js"></script>

</body>

</html>