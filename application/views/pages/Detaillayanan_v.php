<!DOCTYPE html>

<html lang="en" style="">



<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/'); ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/'); ?>css/main.css" rel="stylesheet">

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
    </div><!-- End Breadcrumbs --></br></br>
    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head-d"><span><?php echo str_replace('-', ' ', $nama) ?></span></h2>
                </a>
                <p align="justify">
                  <?php if ($this->session->userdata('current_language') == 'English') { ?>
                    <?php echo $detail->deskripsi_layanan_en ?>
                  <?php } else { ?>
                    <?php echo $detail->deskripsi_layanan ?>
                  <?php } ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
            <div class="well-left">
              <div class="single-well">
                <div class="single-awesome-project">
                  <div class="awesome-img-2 wow fadeInUp">
                    <a href="#">
                      <img src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>" alt="<?php echo $detail->nama_layanan . ' - ' . $kategori->nama_kategori . ' - ' . $namaPerusahaan; ?>">
                    </a>
                    <div class="add-actions-2 text-center">
                      <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->

  <footer>

    <div class="footer-area-bottom">

      <div class="container">

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="copyright text-center">

              <p>

                &copy; Copyright <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This website is made with by <a href="https://elecompsoftwarehouse.com" target="_blank">Elecomp Software House</a>

              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </footer><!-- End  Footer -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- <div id="preloader"></div> -->



  <!-- Vendor JS Files -->

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/php-email-form/validate.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/appear/jquery.appear.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/knob/jquery.knob.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/parallax/parallax.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/wow/wow.min.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/nivo-slider/js/jquery.nivo.slider.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="<?php echo base_url('assetsuser/'); ?>vendor/venobox/venobox.min.js"></script>



  <!-- Template Main JS File -->
  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>


</body>



</html>