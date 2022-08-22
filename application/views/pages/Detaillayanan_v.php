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
  </header><!-- End Header -->

<!-- ======= Page Property  ======= -->
<div class="our-skill-area fix hidden-sm">
  <div class="overlay"></div>
  <div class="area-padding-2" style="background-size: cover; background-position: 0 -700px; background-image: url(<?php echo base_url('assets/') ?>img/82fa28179db1f8b30c60786d1418f120.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="slide-head-text text-center">
            <h3 class="wow fadeInDown"><span><?php echo get_phrase('Produk Detail') ?></span></h3>
            <ul class="short-bread wow fadeInUp">
              <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
              <li><a href="<?php echo site_url('Layanan_c') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
              <li><?php echo get_phrase('Produk Detail') ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->

<main id="main">
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