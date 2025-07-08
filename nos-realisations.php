<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>Nos realisations - Agence web et de marketing digital à Douala Cameroun - Oaliv</title>
	<meta name="title" content="Nos realisations - Agence web et de marketing digital à Douala Cameroun - Oaliv">
	<meta name="description" content="Nos realisations - Agence web et de marketing digital à Douala Cameroun - Oaliv">
	<?php include_once 'includes/head.php' ?>

</head>


<body>

	<!-- Messenger Plugin de discussion Code -->
	<div id="fb-root"></div>

	<!-- Your Plugin de discussion code -->
	<div id="fb-customer-chat" class="fb-customerchat">
	</div>

	<script>
		var chatbox = document.getElementById('fb-customer-chat');
		chatbox.setAttribute("page_id", "100997072691517");
		chatbox.setAttribute("attribution", "biz_inbox");
	</script>

	<!-- Your SDK code -->
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml: true,
				version: 'v17.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br /><br />
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">
		<!-- Header start -->
		<header id="header" class="navbar-fixed-top header" role="banner">
			<?php include_once 'includes/header.php' ?>
		</header>
		<!--/ Header end -->

		<div id="banner-area">
			<img src="images/banner/banner2.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2>NOS RÉALISATIONS</h2>
					<ul class="breadcrumb">
						<li>Home</li>
						<li><a href="#">Nos realisations</li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->


		<!-- Portfolio start -->
		<section id="main-container" class="portfolio portfolio-box">
			<div class="container">
				<!--Isotope filter start -->
				<div class="row text-right">
					<div class="isotope-nav" data-isotope-nav="isotope">
						<ul>
							<li><a href="#" class="active" data-filter="*">Tout</a></li>
							<li><a href="#" data-filter=".website">Sites Web</a></li>
							<li><a href="#" data-filter=".development">Applications</a></li>
							<li><a href="#" data-filter=".web-design">Web Design</a></li>
						</ul>
					</div>
				</div><!-- Isotope filter end -->

				<div class="row">
					<div id="isotope" class="isotope">

						<div class="col-sm-3 website development isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/ludoviccreative.png" alt="Ludovic Creative">
									<img src="images/portfolio/ludoa.png" alt="Ludovic Creative">
									<figcaption>
										<h3>Ludovic Creative</h3>
										<a class="link icon-pentagon" href="https://ludoviccreative.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/ludoviccreative.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/phytoglobalservices.png" alt="Phyto And Global Services">
									<img src="images/portfolio/phytoa.png" alt="Phyto And Global Services">
									<figcaption>
										<h3>Phyto And Global Services</h3>
										<a class="link icon-pentagon" href="https://www.phytoglobalservices.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/phytoglobalservices.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/pgstravel.png" alt="PGS Travel">
									<img src="images/portfolio/pgstravela.png" alt="PGS Travel">
									<figcaption>
										<h3>PGS Travel</h3>
										<a class="link icon-pentagon" href="https://travel-pgstravel.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/pgstravel.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/yoursever.png" alt="Yours Ever">
									<img src="images/portfolio/yoursa.png" alt="Yours Ever">
									<figcaption>
										<h3>Yours Ever</h3>
										<a class="link icon-pentagon" href="https://yours-ever.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/yoursever.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/seci.png" alt="SECI">
									<img src="images/portfolio/secia.png" alt="SECI">
									<figcaption>
										<h3>SECI</h3>
										<a class="link icon-pentagon" href="https://seci-cm.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/seci.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/Netbund.png" alt="Netbund">
									<img src="images/portfolio/netbunda.png" alt="Netbund">
									<figcaption>
										<h3>Netbund</h3>
										<a class="link icon-pentagon" href="https://netbund.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/Netbund.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/oaliv.png" alt="Oaliv Inc.">
									<img src="images/portfolio/oaliva.png" alt="Oaliv Inc.">
									<figcaption>
										<h3>Oaliv Inc.</h3>
										<a class="link icon-pentagon" href="https://oaliv.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/oaliv.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website development isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/soci.png" alt="SOCIPRODD">
									<img src="images/portfolio/socia.png" alt="SOCIPRODD">
									<figcaption>
										<h3>SOCIPRODD</h3>
										<a class="link icon-pentagon" href="https://www.sociprodd.net/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/soci.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website development isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/blogoaliv.png" alt="Blog Oaliv">
									<img src="images/portfolio/blogoaliva.png" alt="Blog Oaliv">
									<figcaption>
										<h3>Blog Oaliv</h3>
										<a class="link icon-pentagon" href="https://www.oaliv.com/blog/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/blogoaliv.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website development isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/qualiticien.png" alt="Le Qualiticien">
									<img src="images/portfolio/qualiticiena.png" alt="Le Qualiticien">
									<figcaption>
										<h3>Le Qualiticien</h3>
										<a class="link icon-pentagon" href="https://www.le-qualiticien.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/qualiticien.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 website development isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/sotrip.png" alt="Sotrip Ltd">
									<img src="images/portfolio/sotripa.png" alt="Sotrip Ltd">
									<figcaption>
										<h3>Le Qualiticien</h3>
										<a class="link icon-pentagon" href="https://www.le-qualiticien.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/qualiticien.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio4.jpg" alt="">
									<figcaption>
										<h3>Brand</h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio4.jpg"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio5.jpg" alt="">
									<figcaption>
										<h3>MARQUE DE MODE</h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio5.jpg"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio6.jpg" alt="">
									<figcaption>
										<h3>wRITER'S DEN</h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio6.jpg"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio7.jpg" alt="">
									<figcaption>
										<h3>MINIONS </h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio7.jpg"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio8.jpg" alt="">
									<figcaption>
										<h3>Julia Photographie</h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio8.jpg"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->
					</div><!-- Content row end -->
				</div><!-- Container end -->
		</section><!-- Portfolio end -->

		<div class="gap-40"></div>

		<!-- Footer start -->
		<section id="footer" class="footer footer-map">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="footer-logo">
							<img src="images/logo.png" alt="logo">
						</div>
						<div class="gap-20"></div>
						<ul class="dark unstyled">
							<li>
								<a title="Twitter" href="https://www.twitter.com/oalivinc">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Facebook" href="https://www.facebook.com/oalivinc">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
								</a>
								<a title="Instagram" href="https://www.instagram.com/oalivinc">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-instagram"></i></span>
								</a>
								<a title="linkedin" href="https://www.linkedin.com/company/oalivinc">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
								</a>
								<a title="Whattsap" href="https://wa.me/message/BGJQFJCTNAMOO1">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-whatsapp"></i></span>
								</a>
								<a title="YouTube" href="https://www.youtube.com/oalivinc">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-youtube-play "></i></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--/ Row end -->
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyright-info">
							&copy; Copyright <?php echo date("Y"); ?> <strong><span>Oaliv Inc</span></strong>. All Rights Reserved | <span>Fièrement propulsé par <a href="https://oaliv.com/">Oaliv Inc.</a></span>
						</div>
					</div>
				</div>
				<!--/ Row end -->
				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
				</div>
			</div>
			<!--/ Container end -->
		</section>
		<!--/ Footer end -->

		<!-- Javascript Files
	================================================== -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Style Switcher -->
		<script type="text/javascript" src="js/style-switcher.js"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<!-- PrettyPhoto -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<!-- Bxslider -->
		<script type="text/javascript" src="js/jquery.flexslider.js"></script>
		<!-- CD Hero slider -->
		<script type="text/javascript" src="js/cd-hero.js"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="js/isotope.js"></script>
		<script type="text/javascript" src="js/ini.isotope.js"></script>
		<!-- Wow Animation -->
		<script type="text/javascript" src="js/wow.min.js"></script>
		<!-- SmoothScroll -->
		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<!-- Eeasing -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- Counter -->
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<!-- Waypoints -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<!-- Template custom -->
		<script type="text/javascript" src="js/custom.js"></script>
	</div><!-- Body inner end -->
</body>

</html>