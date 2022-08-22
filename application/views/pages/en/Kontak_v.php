<!-- ======= Header ======= -->

  <header id="header" class="fixed-top">

    <div class="container d-flex">

      <div class="logo mr-auto">

          <h1><a href="index.html"><img src="<?php echo base_url('assets/'); ?>img/logo_rp.png" style="margin: -10px -0px 0px 0px;" ></a></h1>

      </div>



      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li> <a href="<?php echo site_url('Beranda_c') ?>">Home</a></li>

          <li> <a href="<?php echo site_url('Layanan_c') ?>">Our Service</a></li>

          <li> <a href="<?php echo site_url('Galeri_c') ?>">Photo Gallery</a></li>

          <li class="active"> <a href="<?php echo site_url('Kontak_c') ?>">Our Contact</a></li>

        </ul>

      </nav><!-- .nav-menu -->

    </div>

  </header><!-- End Header -->



    <!-- ======= Page Property  ======= -->

    <div class="our-skill-area fix hidden-sm">

      <div class="overlay"></div>

      <div class="area-padding-2" style="background-image: url(<?php echo base_url('assets/')?>img/slide1.jpg); ">

        <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="slide-head-text text-center">

              <h3 class="wow fadeInDown"><span>Our Contact</span></h3>

                <ul class="short-bread wow fadeInUp">

                  <li><a href="<?php echo site_url('Beranda_c') ?>">Home</a></li>

                  <li>Our Contact</li>

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

    <div class="about-area area-padding">

      <div class="container">

        <?php foreach ($kontak->result() as $result) : ?>

                  <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" >

            <div class="well-middle">

              <div class="single-well-c">

                <a href="#">

                  <h2 class="sec-head-c"><span>Our Contact</span></h2>

                </a>

                <p>

                  <?php echo $result->deskripsi_kontak?></p>

                <p>Email :

                  <?php echo $result->email_kontak ?></p>

                <p>Nomor :

                  <?php echo $result->nomor_kontak ?>

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" >

            <div class="well-left">

              <div class="single-well">

                  <?php echo $result->script_embed_code ?>

              </div>

            </div>

          </div>

        </div>

      </div>

      <?php endforeach; ?>

    </div><!-- End About Section -->

</main><!-- End #main -->