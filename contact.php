<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>Contact - Agence web et de marketing digital à Douala Cameroun - Oaliv</title>
	<meta name="title" content="Contact - Agence web et de marketing digital à Douala Cameroun - Oaliv">
	<meta name="description" content="Contact - Agence web et de marketing digital à Douala Cameroun - Oaliv">
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
					<h2>Nous contacter</h2>
					<ul class="breadcrumb">
						<li>Home</li>
						<li><a href="#"> Contact</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<section id="main-container">
			<div class="container">

				<div class="row">
					<!-- Map start here -->
					<div id="map-wrapper" class="no-padding">
						<div class="map" id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.531957652838!2d9.759229973981904!3d4.115146846457509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d10a8fbb0f9%3A0x75449a7b7b2fb1cf!2sOaliv%20Inc.!5e0!3m2!1sfr!2scm!4v1689211264252!5m2!1sfr!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

						</div>
					</div>
					<!--/ Map end here -->

				</div><!-- Content row  end -->

				<div class="gap-40"></div>

				<div class="row">
					<div class="col-md-7">
						<form id="contact-form" method="post" action="" role="form">
							<div class="row">
								<div class="col-md-4">
									<label for="name">Nom <span class="blue">*</span></label>
									<input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
									<p class="comments"></p>
								</div>
								<div class="col-md-4">
									<label for="email">Email <span class="blue">*</span></label>
									<input id="email" type="email" name="email" class="form-control" placeholder="Votre Email">
									<p class="comments"></p>
								</div>
								<div class="col-md-4">
									<label for="phone">Téléphone</label>
									<input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
									<p class="comments"></p>
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message <span class="blue">*</span></label>
								<textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4" style="height: 150px;"></textarea>
								<p class="comments"></p>
							</div>
							<div class="form-group">
								<p class="blue"><strong>* Ces informations sont requises.</strong></p>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary solid blank" value="Envoyer">
							</div>
						</form>
					</div>
					<div class="col-md-5">
						<div class="contact-info">
							<h3>NOUS CONTACTER</h3>
							<p>Si vous avez des questions, n'hésitez pas à nous contacter</p>
							<br>
							<p><i class="fa fa-home info"></i> Logpom, Douala, Cameroun </p>
							<p><i class="fa fa-phone info"></i> +(237) 6 91 96 21 58 / +(33) 7 64 28 90 29</p>
							<p><i class="fa fa-envelope-o info"></i> info@oaliv.com</p>
							<p><i class="fa fa-globe info"></i> www.oaliv.com</p>
						</div>
					</div>
				</div>

			</div>
			<!--/ container end -->

		</section>
		<!--/ Main container end -->


		<!-- Footer start -->
		<footer id="footer" class="footer">
			<?php include_once 'includes/footer.php' ?>
		</footer><!-- Footer end -->


		<!-- Footer start -->
		<section id="copyright" class="copyright angle">
			<?php include_once 'includes/copyright.php' ?>
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
		<script src="js/script_contact.js"></script>
	</div><!-- Body inner end -->
</body>

</html>