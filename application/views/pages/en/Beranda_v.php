<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
          <h1><a href="<?php echo site_url('Beranda_c') ?>"><img src="<?php echo base_url('assets/'); ?>img/logo_rp.png" style="margin: -10px -0px 0px 0px;" ></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"> <a href="<?php echo site_url('Beranda_c') ?>">Home</a></li>
          <li> <a href="<?php echo site_url('Layanan_c') ?>">Our Service</a></li>
          <li> <a href="<?php echo site_url('Galeri_c') ?>">Galery</a></li>
          <li> <a href="<?php echo site_url('Kontak_c') ?>">Our Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  
  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
      	<?php foreach ($slider->result() as $result) : ?>
        <img src="<?php echo base_url('assets/')?>img/<?php echo $result->foto_slider ?>" alt="" title="#slider-direction-1" />
        <?php endforeach; ?>
      </div>

       <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-2 hidden-xs wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Robert & Partners Law Office</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-1 hidden-xs wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title2">The Best Lawyer Services</h2> 
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('kontak_c')?>">Contact Us </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <?php foreach ($tentang->result() as $result) : ?>
          
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" >
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head"><span><?php echo $result->nama_depan ?> <?php echo $result->nama_belakang ?></span></h2>
                </a>
                <p>
                  <?php echo $result->deskripsi_tentang ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" >
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
        <?php endforeach; ?>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Property Section ======= -->
    <div class="our-skill-area fix hidden-sm wow fadeIn">
      <div class="test-overly"></div>
      <div class="skill-bg area-padding-2">
        <div class="container">
        <div class="row wow fadeInDown">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h4><span>Our Service</span></h4>
            </div>
          </div>
        </div>
        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <?php $a=0; $b=3; 
        foreach ($layanan->result() as $result) { 
          $a++; 
          if ($a <= $b) { ?>
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
          <?php } } ?>
        </div>
      </div>
      </div>
    </div>
    <!-- End Skills Section -->

    </main><!-- End #main -->
