<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
          <h1><a href="index.html"><img src="<?php echo base_url('assets/'); ?>img/logo_rp.png" style="margin: -10px -0px 0px 0px;" ></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li> <a href="<?php echo site_url('Beranda_c') ?>">Home</a></li>
          <li class="active"> <a href="<?php echo site_url('Layanan_c') ?>">Our Service</a></li>
          <li> <a href="<?php echo site_url('Galeri_c') ?>">Photo Gallery</a></li>
          <li> <a href="<?php echo site_url('Kontak_c') ?>">Our Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

    <!-- ======= Page Property  ======= -->
    <div class="our-skill-area fix hidden-sm">
      <div class="overlay"></div>
      <div class="area-padding-2" style="background-image: url(<?php echo base_url('assets/')?>img/slide1.jpg);">
        <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="slide-head-text text-center">
              <h3 class="wow fadeInDown"><span>Service Detail</span></h3>
                <ul class="short-bread wow fadeInUp">
                  <li><a href="<?php echo site_url('Beranda_c') ?>">Home</a></li>
                  <li><a href="<?php echo site_url('Layanan_c') ?>">Our Service</a></li>
                    <li>Service Detail</li>
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
      <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" >
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head-d"><span><?php echo $detail->nama_layanan ?> Service</span></h2>
                </a>
                <p align="justify">
                  <?php echo $detail->deskripsi_layanan ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" >
            <div class="well-left">
              <div class="single-well">
                <div class="single-awesome-project">
              <div class="awesome-img-2 wow fadeInUp">
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>" alt="">
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
