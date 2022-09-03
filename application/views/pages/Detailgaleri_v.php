<!DOCTYPE html>

<html lang="en" style="">



<head>

	<meta charset="utf-8">

	<meta content="width=device-width, initial-scale=1.0" name="viewport">



	<title><?php echo $title ?></title>

	<meta content="<?php echo $metadesc; ?>" name="descriptison">


</head>



<body data-spy="scroll" data-target="#navbar-example">


	<!-- ======= Page Property  ======= -->
	<div class="our-skill-area fix hidden-sm">
		<div class="overlay"></div>
		<div class="area-padding-2" style="background-size: cover; background-position: 0 -700px; background-image: url(<?php echo base_url('assets/') ?>img/82fa28179db1f8b30c60786d1418f120.jpeg); ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="slide-head-text text-center">
							<h3 class="wow fadeInDown"><span><?php echo $judul; ?></span></h3>
							<ul class="short-bread wow fadeInUp">
								<li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
								<li><a href="<?php echo site_url('Galeri_c') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
								<li><?php echo $judul; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Properti -->

	<main>
		<div class="container">
			<div class="galeri-judul my-5">
				<h3 class="text-center"><?php echo $judul; ?></h3>
			</div>
			<div class="row awesome-project-content">
				<!-- single-awesome-project start -->
				<?php foreach ($galeri->result() as $result) : ?>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single-awesome-project">
							<div class="awesome-img-2 wow fadeInUp">
								<a href="#" class="fancybox"><img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $judul . ' - ' . $namaPerusahaan; ?>" /></a>
								<div class="add-actions-2 text-center">
									<div class="project-dec">
										<a class="venobox" data-gall="myGallery" href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- single-awesome-project end -->
				<?php endforeach; ?>
			</div>
		</div>
	</main>


	<!-- ======= Footer ======= -->

	<footer>

		<div class="footer-area-bottom">

			<div class="container">

				<div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12">

						<div class="copyright text-center">

							<p>

								&copy; Copyright <script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This website is made with by <a href="https://elecompsoftwarehouse.com" target="_blank">Elecomp Software House</a>

							</p>

						</div>

					</div>

				</div>

			</div>

		</div>

	</footer><!-- End  Footer -->



	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

	<!-- <div id="preloader"></div> -->



	<!-- Vendor JS Files -->

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/jquery/jquery.min.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/jquery.easing/jquery.easing.min.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/php-email-form/validate.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/appear/jquery.appear.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/knob/jquery.knob.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/parallax/parallax.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/wow/wow.min.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/nivo-slider/js/jquery.nivo.slider.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/owl.carousel/owl.carousel.min.js"></script>

	<script src="<?php echo base_url('assetsuser/'); ?>vendor/venobox/venobox.min.js"></script>



	<!-- Template Main JS File -->

	<script src="<?php echo base_url('assetsuser/'); ?>js/main.js"></script>

</body>



</html>