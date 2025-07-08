<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>Error - Agence web et de marketing digital à Douala Cameroun - Oaliv</title>
	<meta name="title" content="Error - Agence web et de marketing digital à Douala Cameroun - Oaliv">
	<meta name="description" content="Error - Agence web et de marketing digital à Douala Cameroun - Oaliv">
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
					<h2>404 Error Page</h2>
					<ul class="breadcrumb">
						<li>Home</li>
						<li>Pages</li>
						<li><a href="https://www.oaliv.com/"> Page d'erreur</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<section id="main-container">
			<div class="container">
				<div class="error-page text-center">
					<div class="error-code">
						<strong>404</strong>
					</div>
					<div class="error-message">
						<h3>Oups... Page introuvable !</h3>
					</div>
					<div class="error-body">
						Essayez d'utiliser le bouton ci-dessous pour accéder à la page principale du site. <br />
						<a href="https://www.oaliv.com/" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Aller à la page d'accueil</a>
					</div>
				</div>
			</div>
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
	</div><!-- Body inner end -->
</body>

</html>