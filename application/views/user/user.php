<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

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
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="<?= base_url('/catalog'); ?>" class="logo2 mr-auto bx bx-left-arrow-circle"></a>
            <!-- <a href="index.html" class="logo mr-auto"><img src="<?= base_url(); ?>/assets/img/logo2.png" alt="" class="img-fluid"></a> -->

            <!-- <a href="#" class="drop-down get-started-btn scrollto bx bx-user"></a> -->

            <nav class="prof d-lg-block">
                <h5>Hi, <?= $user['name']; ?></h5>
            </nav>
    </header>
    <!-- end header -->

    <!-- hero -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" class="img-prof img-thumbnail rounded-circle">
                </div>
                <div class="prof col-lg-8 mt-5">
                    <h4><?= $user['name']; ?></h4>
                    <!-- <h5>ganti foto profil</h5> -->
                    <a href="<?= base_url('user/edit'); ?>" class="btn btn-secondary">edit profile</a>
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
                    <h2>Data Profil</h2>
                    <div class="row">
                        <div class="cardio col-lg-6 mb-5">
                            <i class='bx bxs-user'></i>
                            <p><?= $user['name']; ?></p>
                        </div>

                        <div class="cardio col-lg-6 mb-5">
                            <i class='bx bxs-check-square'></i>
                            <p><?= $user['email']; ?></p>
                        </div>

                        <div class="cardio col-lg-6 mb-5">
                            <i class='bx bxs-phone-call'></i>
                            <?php if ($user['role_id'] == 3) : ?>
                                <p>Member Premium</p>
                            <?php else : ?>
                                <p>Member</p>
                            <?php endif; ?>
                        </div>

                        <div class="cardio col-lg-6 mb-5">
                            <i class='bx bxs-lock'></i>
                            <p>Member since <?= date('d F Y', $user['date_created']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

    </main>


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