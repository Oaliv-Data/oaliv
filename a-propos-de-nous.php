<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>À Propos de Nous - Agence Web Innovante | Oaliv Douala Cameroun</title>
	<meta name="title" content="À Propos de Nous - Agence Web Innovante | Oaliv Douala Cameroun">
	<meta name="description" content="Découvrez Oaliv, votre agence web experte à Douala. Plus de 100 clients satisfaits, 80+ projets réalisés. Innovation et excellence dans le digital depuis plusieurs années.">
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
			<img src="images/banner/banner1.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2>À PROPOS DE NOUS</h2>
					<ul class="breadcrumb">
						<li>Accueil</li>
						<li>Entreprise</li>
						<li><a href="#"> À propos de nous</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<section id="main-container">
			<div class="container">

				<!-- Company Profile -->

				<div class="row">
					<div class="col-md-12 heading text-center">
						<h2 class="title2">À propos de notre entreprise
							<span class="title-desc">Une équipe dynamique, en quête continue de l'innovation avec plusieurs années d'expérience !</span>
						</h2>
					</div>
				</div><!-- Title row end -->

				<div class="row about-wrapper-top">
					<div class="col-md-6 ts-padding about-message">
						<h3>Qui sommes-nous ?</h3>
						<p>Oaliv est Une Agence Web au Cameroun. Notre Expertise couvre les domaines de la Création de sites web professionnels, de sites e-commerce, l'élaboration de stratégie de marketing digital, le développement d'applications sur mesure, l'édition et l'intégration de solutions digitales.</p>
						<p>Bénéficiant de compétences significatives dans le développement des solutions digitales
							sur-mesure, Oaliv vous aide à porter votre entreprise au maximum de son potentiel,
							d’augmenter ses performances et développer votre activité à travers des outils performants
							et personnalisés.</p>
					</div>
					<!--/ About message end -->
					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-1.jpg) 50% 50% / cover no-repeat;">
					</div>
					<!--/ About image end -->
				</div>
				<!--/ Content row end -->

				<div class="row about-wrapper-bottom">
					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-2.jpg) 50% 50% / cover no-repeat;">
					</div>
					<!--/ About image end -->
					<div class="col-md-6 ts-padding about-message">
						<h3>CE QUE NOUS FAISONS</h3>
						<p>Depuis plusieurs années, nous accompagnons des clients de toutes dimensions et de secteurs très variés
							tels que, le commerce, la santé, l’énergie, l’immobilier, le bâtiment, banque et assurance,
							finance, éducation… Et nous mettons enthousiasme, créativité et compétences aux services de
							nos créations pour les transformer en belles histoires.</p>
						<P>Pour chaque projet informatique, nous commençons par la réception du cahier des charges pour
							avoir une idée sur les spécifications techniques et les exigences du client et organisons
							même des réunions, pour donner plus de chances aux professionnels dans l’explication de
							leurs attentes</P>
						<!--<ul class="unstyled arrow">
							<li><a href="#">Etiam porta sem malesuada</a></li>
							<li><a href="#">Pellentesque ornare sem lacinia</a></li>
							<li><a href="#">Cras mattis consectetur purus</a></li>
							<li><a href="#">Sed hendrerit quam sed ante</a></li>
						</ul>-->
					</div>
					<!--/ About message end -->
				</div>
				<!--/ Content row end -->

				<!-- Company Profile -->

			</div>
			<!--/ 1st container end -->


			<div class="gap-60"></div>


			<!-- Counter Strat -->
			<div class="ts_counter_bg parallax parallax2">
				<div class="parallax-overlay"></div>
				<div class="container">
					<div class="row wow fadeInLeft text-center">
						<div class="facts col-md-3 col-sm-6">
							<span class="facts-icon"><i class="fa fa-user"></i></span>
							<div class="facts-num">
								<span class="counter">+100</span>
							</div>
							<h3>Clients</h3>
						</div>

						<div class="facts col-md-3 col-sm-6">
							<span class="facts-icon"><i class="fa fa-institution"></i></span>
							<div class="facts-num">
								<span class="counter">+30</span>
							</div>
							<h3>SECTEURS D'ACTIVITÉS</h3>
						</div>

						<div class="facts col-md-3 col-sm-6">
							<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
							<div class="facts-num">
								<span class="counter">+80</span>
							</div>
							<h3>PROJECTS</h3>
						</div>

						<div class="facts col-md-3 col-sm-6">
							<span class="facts-icon"><i class="fa fa-trophy"></i></span>
							<div class="facts-num">
								<span class="counter">+20</span>
							</div>
							<h3>CERTIFICATIONS</h3>
						</div>

						<div class="gap-40"></div>

						<div><a href="nos-realisations" class="btn btn-primary solid">Voir NOS RÉALISATIONS</a></div>

					</div>
					<!--/ row end -->
				</div>
				<!--/ Container end -->
			</div>
			<!--/ Counter end -->
		</section>
		<!--/ Main container end --> <span class="img-top"></span>




		<div class="gap-40"></div>

		<!-- Footer start -->
		<footer id="footer" class="footer">
			<?php include_once 'includes/footer.php' ?>
		</footer><!-- Footer end -->


		<!-- Copyright start -->
		<section id="copyright" class="copyright angle">
			<?php include_once 'includes/copyright.php' ?>
		</section>
		<!--/ Copyright end -->

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
		<!-- Owl Carousel -->
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