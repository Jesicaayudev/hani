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
              <h3 class="wow fadeInDown"><span>Our Service</span></h3>
                <ul class="short-bread wow fadeInUp">
                  <li><a href="<?php echo site_url('Beranda_c') ?>">Home</a></li>
                  <li>Our Service<</li>
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
    <div class="about-area area-padding-3">
      <div class="container">
         <div class="row wow fadeInDown">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>All of Our Services</h3>
            </div>
          </div>
        </div>

         <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <?php 
            foreach ($layanan->result() as $result) { 
              ?>
          <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_layanan ?>" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="<?php echo site_url('Layanan_c/detail/'.$result->id_layanan) ?>">
                      <h4><?php echo $result->nama_layanan ?></h4>
                      <span><?php echo substr($result->deskripsi_layanan, 0, 100). " ..... " ?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div><!-- End About Section -->
    </main><!-- End #main -->
