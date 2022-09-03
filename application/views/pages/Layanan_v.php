<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UpConstruction Bootstrap Template - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.1.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href='Home' class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>HANISUN CAKE<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li> <a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
          <li> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
          <li class="active"> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
          <li> <a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
          <li> <a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
          <li>
          <li class="dropdown"><a href="#"><span><?php echo get_phrase('Pilih Bahasa'); ?>
                <img src="<?php echo base_url('assets/') ?>flag/id.png">&nbsp;<img src="<?php echo base_url('assets/') ?>flag/en.png">
                &nbsp;</i></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <?php
              $fields = $this->db->list_fields('language');
              foreach ($fields as $field) {
                if ($field == 'phrase_id' || $field == 'phrase') continue;
              ?>
                <li>
                  <a href="<?php echo base_url(); ?>Multilanguage/select_language/<?php echo $field; ?>" style="color:black;">
                    <?php echo $field; ?>
                    <?php //selecting current language
                    if ($this->session->userdata('current_language') == $field) : ?>
                      <i class="icon-ok"></i>
                    <?php endif; ?>
                  </a>
                </li>
              <?php
              }
              ?>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url(<?php echo base_url('assets/') ?>img/14ce87616e0cb6fcd3df63e97d05ca93.jpeg);">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2><span><?php echo get_phrase('Produk Kami') ?></span></h2>
        <ol>
          <li><a href='Home'>Home</a></li>
          <li><span><?php echo get_phrase('Produk Kami') ?></span></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <?php foreach ($product as $p) : ?>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <p>
                  <?php if ($this->session->userdata('current_language') == 'English') { ?>
                <h3><?php echo $p['nama_kategori_en']; ?></h3>
              <?php } else { ?>
                <h3><?php echo $p['nama_kategori']; ?></h3>
              <?php } ?></p>
              <?php foreach ($gambar->gambarproduk($p['id_kategori'])->result() as $result) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-img"><img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_layanan ?>" alt="<?php echo $result->nama_layanan . ' - ' . $p['nama_kategori'] . ' - ' . $namaPerusahaan; ?>" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h5>
                      <?php if ($this->session->userdata('current_language') == 'English') { ?>
                        <a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $result->kategori) . '/' . str_replace(' ', '-', $result->nama_layanan_en)) ?>">
                          <h5><?php echo $result->nama_layanan_en ?></h5>
                          <!-- <span><?php echo substr($result->deskripsi_layanan_en, 0, 100) . " ... " ?></span> -->
                        <?php } else { ?>
                          <a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $result->kategori) . '/' . str_replace(' ', '-', $result->nama_layanan)) ?>">
                            <h5><?php echo $result->nama_layanan ?></h5>
                            <!-- <span><?php echo substr($result->deskripsi_layanan, 0, 100) . " ... " ?></span> -->
                          <?php } ?>
                    </h5>
                    <a href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_layanan ?>" alt="<?php echo $result->nama_layanan . ' - ' . $p['nama_kategori'] . ' - ' . $namaPerusahaan; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              <?php endforeach; ?>
              <div class="see-more text-center col-12">
                <?php if ($this->session->userdata('current_language') == 'English') { ?>
                  <a href="<?php echo site_url('Our-Products/' . str_replace(' ', '-', $p['nama_kategori_en'])) ?>" class="btn btn-dark"><?php echo get_phrase('Lihat Selengkapnya') ?></a>
                <?php } else { ?>
                  <a href="<?php echo site_url('Our-Products/' . str_replace(' ', '-', $p['nama_kategori'])) ?>" class="btn btn-dark"><?php echo get_phrase('Lihat Selengkapnya') ?></a>
                <?php } ?>
              </div>
              </div>
            </div><!-- End Service Item -->

          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>