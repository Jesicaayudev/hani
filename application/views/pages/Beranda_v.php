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
          <li class="active"> <a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
          <li> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
          <li> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
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
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.png)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3><?php echo get_phrase('Tentang Kami') ?></h3>
              <?php foreach ($tentang->result() as $result) : ?>
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" style="width: 500px; " alt="<?php echo $namaPerusahaan; ?>">
                </a>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3><span><?php echo $result->nama_tentang ?></span></h3>
              <p><?php if ($this->session->userdata('current_language') == 'English') { ?>
                  <?php echo substr($result->deskripsi_tentang_en, 0, 1000) . '...' ?>
                <?php } else { ?>
                  <?php echo substr($result->deskripsi_tentang, 0, 1000) . '...' ?>
                <?php } ?></p>
              <div class="col-md-12 text-center">
                <a href="<?php echo site_url('About-us') ?>" class="btn btn-warning"><?php echo get_phrase('selengkapnya') ?></a>
              <?php endforeach; ?>

              </div>

          </div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo get_phrase('Galeri Foto') ?></h2>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php $a = 0;
            $b = 3;
            foreach ($galeri->result() as $result) {
              $a++;
              if ($a <= $b) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $namaPerusahaan; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <a href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                  </div>
                </div>
            <?php }
            } ?>
            <!-- End Projects Item -->
          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- <div id="preloader"></div> -->

    </body>

    </html>