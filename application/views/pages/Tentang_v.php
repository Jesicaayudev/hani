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
         <li class="active"> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
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

 <main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs d-flex align-items-center" style="background-image: url(<?php echo base_url('assets/') ?>img/14ce87616e0cb6fcd3df63e97d05ca93.jpeg);">
     <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

       <h2>About</h2>
       <ol>
         <li><a href='Home'>Home</a></li>
         <li>About</li>
       </ol>

     </div>
   </div><!-- End Breadcrumbs -->

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
     <div class="container" data-aos="fade-up">

       <?php foreach ($tentang->result() as $result) : ?>
         <div class="row position-relative">
           <div class="col-lg-7 about-img">
             <a href="#">
               <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" style="margin-top: 120px; width: 500px; margin-top:100px;" alt="<?php echo $namaPerusahaan; ?>">
             </a>
           </div>

           <div class="col-lg-7">
             <h2><?php echo $result->nama_tentang ?></h2>
             <div class="our-story">
               <p><?php if ($this->session->userdata('current_language') == 'English') { ?>
                   <?php echo $result->deskripsi_tentang_en ?>
                 <?php } else { ?>
                   <?php echo $result->deskripsi_tentang ?>
                 <?php } ?>
               </p>
             </div>
           </div>

         </div>
       <?php endforeach; ?>
     </div>
   </section>
   <!-- End About Section -->


   <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <!-- 
  <div id="preloader"></div> -->

   </body>

   </html>