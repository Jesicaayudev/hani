<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
	<div class="container d-flex">
		<div class="logo mr-auto">
			<a href='Home'><h1>HANISUN CAKE<span>.</span></a></h1>
		</div>
		<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

		<nav class="nav-menu d-none d-lg-block">
			<ul>
				<li> <a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
				<li> <a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
				<li class="active"> <a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
				<li> <a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
				<li> <a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
				<li>
					<a href="#" class="" data-toggle="dropdown">
						<?php echo get_phrase('Pilih Bahasa'); ?>
						<img src="<?php echo base_url('assets/') ?>flag/id.png">&nbsp;<img src="<?php echo base_url('assets/') ?>flag/en.png">
						&nbsp;
						<i class="ace-icon fa fa-angle-down bigger-110"></i>
					</a>

					<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
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
		</nav><!-- .nav-menu -->
	</div>
</header>
<!-- ======= Page Property  ======= -->
<div class="our-skill-area fix hidden-sm">
	<div class="overlay"></div>
	<div class="area-padding-2" style="background-size: cover; background-position: 0 -700px;background-image: url(<?php echo base_url('assets/') ?>img/82fa28179db1f8b30c60786d1418f120.jpeg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="slide-head-text text-center">
						<h3 class="wow fadeInDown"><span><?php echo get_phrase('Produk Kami') ?></span></h3>
						<ul class="short-bread wow fadeInUp">
							<li><a href="<?php echo site_url('') ?>"><?php echo get_phrase('Beranda') ?></a></li>
							<li>Vegetable Chips</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<main id="main">

	<!-- ======= About Section ======= -->
	<div class="about-area area-padding-3">
		<div class="container">
			<div class="row wow fadeInDown">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-left">
						<h3><?php echo $judul; ?></h3>
					</div>
				</div>
			</div>

			<div class="row awesome-project-content">
				<!-- single-awesome-project start -->
				<?php foreach ($product->result_array() as $p) : ?>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp">
						<div class="single-awesome-project">
							<div class="awesome-img">
								<img src="<?php echo base_url('assets/'); ?>img/<?php echo $p['foto_layanan'] ?>" alt="<?php echo $p['nama_layanan'] . ' - ' . $judul . ' - ' . $namaPerusahaan; ?>" />
								<div class="add-actions text-center">
									<div class="project-dec">


										<?php if ($this->session->userdata('current_language') == 'English') { ?>
											<a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $p['kategori']) . '/' . str_replace(' ', '-', $p['nama_layanan_en'])) ?>">
												<h4><?php echo $p['nama_layanan_en'] ?></h4>
												<span><?php echo substr($p['deskripsi_layanan_en'], 0, 100) . " ... " ?></span>
											<?php } else { ?>
												<a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $p['kategori']) . '/' . str_replace(' ', '-', $p['nama_layanan'])) ?>">
													<h4><?php echo $p['nama_layanan'] ?></h4>
													<span><?php echo substr($p['deskripsi_layanan'], 0, 100) . " ... " ?></span>
												<?php } ?>

												</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- End About Section -->
</main><!-- End #main -->