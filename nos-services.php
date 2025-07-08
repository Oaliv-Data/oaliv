<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>Nos Services - Développement Web, SEO, Applications | Oaliv Douala Cameroun</title>
	<meta name="title" content="Nos Services - Développement Web, SEO, Applications | Oaliv Douala Cameroun">
	<meta name="description" content="Découvrez nos services : création de sites web, développement d'applications mobiles, SEO, UX/UI design, marketing digital. Agence web expert à Douala, Cameroun.">
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
					<h1>Nos Services</h1>
					<ul class="breadcrumb">
						<li>Accueil</li>
						<li><a href="#">Nos Services</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<section id="main-container">
			<div class="container">

				<!-- Services -->

				<div class="row">
					<div class="col-md-12 heading">
						<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
						<h2 class="title">Découvrez notre expertise <span class="title-desc">Nous nous associons à de grandes entreprises et à des PME ambitieuses pour proposer des sites Web, des logiciels et une UX primés. Associez-vous à nous pour concevoir des produits numériques percutants.</span></h2>
					</div>
				</div><!-- Title row end -->

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
								<h3>SITE VITRINE</h3>
								<p>Nos experts créent pour vous un site vitrine clé en main, mettant en avant votre
									entreprise et vos services. Faites découvrir votre activité au plus grand nombre,
									développez votre image de marque et fidélisez vos visiteurs !</p>
							</div>
						</div>
						<!--/ End first service -->

						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
								<h3>SITE E-COMMERCE</h3>
								<p>Oaliv prend en charge la création de votre site e-commerce de A à Z. Notre principal
									objectif ? Un site e-commerce vous permettant de générer un retour sur investissement
									durable. Profitez d’un CMS facilement administrable et d’un site optimisé SEO !
								</p>
							</div>

						</div>
						<!--/ End Second service -->

						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
								<h3>APPLICATIONS</h3>
								<p>Nos experts en technologies React Native, Java, Flutter ou encore Symfony développent pour vous de superbes apps intuitives, 100 % personnalisées, conçues pour iOS et Android.</p>
							</div>
						</div>
						<!--/ End Third service -->


					</div>
				</div><!-- 1st Content row end -->

				<div class="gap-40"></div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">
						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.4s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
								<h3>UX/UI DESIGN</h3>
								<p>Nos UX/UI designers créent pour vos visiteurs des interfaces intuitives et ergonomiques. Offrons à vos internautes la meilleure expérience de navigation possible !.</p>
							</div>
						</div>
						<!--/ End 4th service -->
						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-bar-chart"></i></span>
								<h3>SEO</h3>
								<p>Nos experts en référencement vous conseillent sur la meilleure stratégie SEO pour
									votre site. Contenu, technique, netlinking : boostez votre trafic organique et votre
									chiffre d’affaires !</p>
							</div>
						</div>
						<!--/ End first service -->

						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class='fa fa-area-chart'></i></span>
								<h3>ERP/CRM</h3>
								<p>Nos développeurs utilisent des progiciels de gestion comme ODOO, SAP ou Microsoft 365
									pour réaliser des outils uniques et sur mesure. Profitez d’une solution ERP 100 %
									adaptée aux enjeux de votre métier !</p>
							</div>

						</div>
						<!--/ End Second service -->
					</div>
				</div><!-- Content 2nd row end -->

				<div class="gap-40"></div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">

						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.4s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class='fa fa-database'></i></span>
								<h3>Analyse des données</h3>
								<p>Oaliv aide les entreprises de plus de 30 secteurs à intégrer, agréger et analyser
									divers types de données provenant de plusieurs sources de données pour répondre à
									leurs besoins les plus délibérés au niveau des départements et de l'entreprise.</p>
							</div>
						</div>
						<!--/ End 4th service -->

						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-comments"></i></span>
								<h3>CONSEIL EN ARCHITECTURE D'ENTREPRISE</h3>
								<p>La conception et la planification de la stratégie d'architecture d'entreprise idéale
									sont essentielles pour donner vie à de nouveaux projets informatiques, processus et
									autres stratégies commerciales. L'architecture d'entreprise est essentielle à toute
									organisation pour stimuler l'élan et accélérer le changement. </p>
							</div>
						</div>
						<!--/ End Third service -->

						<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-lock"></i></span>
								<h3>La cyber-sécurité</h3>
								<p>Guidés par les meilleures pratiques et normes de sécurité logicielle, telles que OWASP
									Application Security Verification Standard, OWASP Security Testing Guide, NIST SP
									800-218, PCI SSF... </p>
							</div>
						</div>
						<!--/ End Third service -->
					</div>
				</div><!-- Content 2nd row end -->
				<!-- Services end -->

			</div>
			<!--/ 1st container end -->


			<div class="gap-60"></div>


			<div class="container">
				<!-- 2nd container start -->


			</div><!-- 2nd container end -->
		</section>
		<!--/ Main container end -->

		<section class="call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>REJOIGNEZ Oaliv ET DONNEZ À VOTRE SITE WEB UN TOUT NOUVEAU LOOK</h3>
						<a href="contact" class="pull-right btn btn-primary white">Demandez un devis gratuit</a>
					</div>
				</div>
			</div>
		</section>


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