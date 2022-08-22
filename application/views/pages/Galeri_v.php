 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>HANISUN CAKE<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
        <li > <a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
        <li> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
        <li> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
        <li class="active"> <a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
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

  <main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs d-flex align-items-center" style="background-image: url(<?php echo base_url('assets/') ?>img/14ce87616e0cb6fcd3df63e97d05ca93.jpeg);">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2><span><?php echo get_phrase('Galeri Foto') ?></span></h2>
        <ol>
        <li><a href='Home'>Home</a></li>
          <li><span><?php echo get_phrase('Galeri Foto') ?></span></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <?php foreach ($album as $a) : ?>
            <?php if ($this->session->userdata('current_language') == 'English') { ?>
							<h2><?php echo $a['nama_album_en']; ?></h2>
						<?php } else { ?>
							<h2><?php echo $a['nama_album']; ?></h2>
						<?php } ?>
          

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($galeri->getPhotoByAlbum($a['id_album'])->result() as $result) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $a['nama_album'] . ' - ' . $namaPerusahaan; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <?php endforeach; ?>
          </div><!-- End Projects Container -->
          <div class="see-more text-center col-12">
          <?php if ($this->session->userdata('current_language') == 'English') { ?>
								<a href="<?php echo site_url('Photo-Gallery/' . str_replace(' ', '-', $a['nama_album_en'])) ?>" class="btn btn-warning"><?php echo get_phrase('Lihat Selengkapnya') ?></a>
							<?php } else { ?>
								<a href="<?php echo site_url('Photo-Gallery/' . str_replace(' ', '-', $a['nama_album'])) ?>" class="btn btn-warning"><?php echo get_phrase('Lihat Selengkapnya') ?></a>
							<?php } ?>
              </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>
    <!-- End Our Projects Section -->
  </main>
  <!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>