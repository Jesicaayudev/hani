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
         <li> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
         <li> <a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
         <li class="active"> <a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
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

       <h2><span><?php echo get_phrase('Hubungi Kami') ?></span></h2>
       <ol>
         <li><a href='Home'>Home</a></li>
         <li><span><?php echo get_phrase('Hubungi Kami') ?></span></li>
       </ol>

     </div>
   </div><!-- End Breadcrumbs -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
     <div class="container">
       <?php foreach ($kontak->result() as $result) : ?>
         <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
             <div class="well-left">
               <div class="single-well">
                 <?php echo $result->script_embed_code ?>
               </div>
             </div>
           </div>
           <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
             <div class="well-middle">
               <div class="single-well-c">
                 <div class="info">
                   <div class="address">
                     <i class="bi bi-geo-alt"></i>
                     <h4>Location:</h4>
                     <p>
                       <?php if ($this->session->userdata('current_language') == 'English') { ?>
                         <?php echo $result->deskripsi_kontak_us ?>
                       <?php } else { ?>
                         <?php echo $result->deskripsi_kontak ?>
                       <?php } ?>
                     </p>
                   </div>

                   <!-- <div class="email">
                  <i class="bi bi-envelope"></i>
                  <p>Email :
                      <?php echo $result->email_kontak ?></p>
                  </div> -->

                   <!-- <div class="phone">
                    <i class="bi bi-phone"></i>
                    <p><?php echo get_phrase('nomor') ?> :
                      <?php echo $result->nomor_kontak ?>
                    </p>
                  </div> -->
                 </div>
               </div>
             </div>
           </div>
         </div>
     </div>
     </div>
   <?php endforeach; ?>
   </div><!-- End About Section -->

   </div>

   </div>
   </section><!-- End Contact Section -->

 </main><!-- End #main -->

 <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- <div id="preloader"></div> -->


 </body>

 </html>