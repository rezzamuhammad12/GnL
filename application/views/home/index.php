<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GNL Ecourse Design</title>

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url(); ?>/assets/img/logo.png">
  <link rel="apple-touch-icon" href="<?= base_url(); ?>/assets/img/logo.png">

  <!-- Vendor css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/aos/aos.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/icofont/icofont.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/poppins">



  <!-- My Css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.css">

</head>

<body>
  <!-- Header -->
  <header id="header" class="fixed-top bg-light">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo mr-auto"><img src="<?= base_url(); ?>/assets/img/logo2.png" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#" class="back-to-home">Utama</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
      <a href="<?= base_url('auth'); ?>" class="get-started-btn scrollto">Masuk</a>
    </div>
  </header>
  <!-- end Header -->

  <!-- Hero -->
  <section id="hero" class="d-flex align-items-center ">

    <div class="container d-flex flex-column align-items-center justify-content-center">
      <h1>Ayo mulai karya pertamamu</h1>
      <h2>Belajar bersama dengan semangat kreatif membara</h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
      <img src="assets/img/hero-01.png" class="img-fluid hero-img" data-aos="zooom-in" data-aos-delay="150" alt="">
    </div>

  </section>
  <!-- end hero -->

  <main id="main">
    <!-- About -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Kenapa harus belajar di GNL ?</h3>
              <p>
                Karena semua industri digital akan sangat membutuhkan seorang designer untuk memenuhi kebutuhan konten. pembelajaran di kami menyajikan materi yang cukup lengkap untuk bersaing di dunia industri.
              </p>
              <a href="course.html" class="about-btn">Bergabung<i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Pendaftaran</h4>
                  <p>Pendaftaran member baru bisa belajar dari nol sehingga bisa tidak perlu khawatir mulai dari mana</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Template</h4>
                  <p>Tersedia banyak template siap untuk digunakan dalam project anda</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Keamanan</h4>
                  <p>Keamanan lisensi dalam produk ialah commercial use dengan syarat dan ketentuan berlaku</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end about -->

    <!-- feature -->
    <section class="features" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Alasan harus belajar di GNL</h2>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url(); ?>/assets/img/undraw_working_late_pukg.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <h3>Akses ecourse design selamanya</h3>
            <p class="font-italic">
              dalam pelayanan ecourse ini anda akan menikmati pelayanan ecourse yang bisa di akses selamanya.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Update materi</li>
              <li><i class="icofont-check"></i> Grup diskusi antar member dan mentor yang siap membantu</li>
              <li><i class="icofont-check"></i> Ribuan template yang siap digunakan</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="<?= base_url(); ?>/assets/img/undraw_dev_productivity_umsq.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Pembelajaran yang menyenangkan</h3>
            <p class="font-italic">
              Anda dapat mempelajari sesuatu hal yang paling dasar hingga level professional
            </p>
            <p>
              Materi pembelajaran dalam setiap video adalah studi kasus dari setiap teknik dalam penggunaan tools yang akan meningkatkan pemahaman terhadap suatu design yang akan dibuat secara menyeluruh.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- end feature -->

    <!-- services -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Berikut adalah layanan di ecourse design GnL yang bisa diakses.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-vector"></i></div>
              <h4 class="title"><a href="#">Kelas Adobe Ilustrator</a></h4>
              <p class="description">Di kelas ini akan belajar tentang design grafis yang terpaku dengan format vector dengan berbagai macam teknik dan style yang diajarkan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-rocket"></i></div>
              <h4 class="title"><a href="#">Kelas Adobe Photoshop</a></h4>
              <p class="description">Kelas ini akan belajar tentang editing photo atau cara mengolah foto dengan berbagai macam trik seperti manipulasi dan lain-lain</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-paper-plane"></i></div>
              <h4 class="title"><a href="#">Free Template(.psd & .ai)</a></h4>
              <p class="description">Berbagai macam template siap guna untuk menunjang kebutuhan design dengan efektif dan efisien</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- end services -->

    <!-- testimoni -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
          <h6>Apa kata mereka yang sudah merasakan layanan ecourse design di GnL</h6>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Saya merasakan banyak hal yang bisa saya dapat..
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?= base_url(); ?>/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Dwiki Darmawan</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Belajarnya seru dan bisa dimana saja..
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?= base_url(); ?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Rezza Mochammad</h3>
            <h4>Programmer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Ilmunya bermanfaat, mantaplah..
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?= base_url(); ?>/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Rio Erika</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              penjelasannya gampang di pahami..
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?= base_url(); ?>/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Wika Uspinawati</h3>
            <h4>Make up artist</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Seru belajar online dan bisa di ulang-ulang tutorialnya hingga benar-benar paham..
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?= base_url(); ?>/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Alysa Yuandra P</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section>
    <!-- end testimoni -->
    <!-- contact -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hubungi kami</h2>
          <h6>Selalu terhubung dengan kami dan dapatkan penawaran dari harga terbaik dari kami.</h6>
        </div>

        <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Rorojongrang Raya A12-12
                    Kota Cimahi, Jawa Barat - INDONESIA</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>dmotekaracademy@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telepon / WhatsApp</h3>
                  <p>+6281289604932</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- end contact -->
  </main>

  <!-- footer -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong>GnL</strong> by <a href="https://dinastimotekar.com/">Dinasti Motekar Academy</a>.
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->


  <!-- backtoptop -->
  <a href="#" class="back-to-top"><i class="bx bx-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS -->
  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

  <!-- My Script JS -->
  <script src="<?= base_url(); ?>/assets/js/main.js"></script>
</body>

</html>