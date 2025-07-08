<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>Agence web et de marketing digital à Douala - Meilleure Agence web et de marketing digital au Cameroun - Oaliv</title>
	<meta name="title" content="Agence web et de marketing digital à Douala - Meilleure Agence web et de marketing digital au Cameroun - Oaliv">
	<meta name="description" content="Agence web et de marketing digital à Douala - Meilleure Agence web et de marketing digital au Cameroun">
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

	<!-- Cookie Consent by Oaliv.com https://www.oaliv.com -->
	<script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
	<script type="text/javascript" charset="UTF-8">
		document.addEventListener('DOMContentLoaded', function() {
			cookieconsent.run({
				"notice_banner_type": "simple",
				"consent_type": "express",
				"palette": "dark",
				"language": "fr",
				"page_load_consent_levels": ["strictly-necessary"],
				"notice_banner_reject_button_hide": false,
				"preferences_center_close_button_hide": false,
				"page_refresh_confirmation_buttons": false,
				"website_name": "Oaliv Inc.",
				"website_privacy_policy_url": "https://oaliv.com/privacy-policy"
			});
		});
	</script>

	<noscript>Cookie Consent by <a href="https://www.oaliv.com/" rel="noopener">Oaliv Inc.</a></noscript>
	<!-- End Cookie Consent by FreePrivacyPolicy.com https://www.oaliv.com -->





	<!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->


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

		<!-- Slider start -->
		<section id="home" class="no-padding">
			<div id="main-slide" class="cd-hero">
				<ul class="cd-hero-slider">
					<li class="selected">
						<div class="overlay2">
							<img class="" src="images/slider/bg1.jpg" alt="slider">
						</div>
						<div class="cd-full-width">
							<h2>Agence web et de marketing digital</h2>
							<h3>Nous rendons possible de grandes choses</h3>
							<a href="nos-services" class="btn btn-primary white cd-btn">Commencez</a>
							<a href="a-propos-de-nous" class="btn btn-primary solid cd-btn">En savoir plus</a>
						</div> <!-- .cd-full-width -->
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="images/slider/bg2.jpg" alt="slider">
						</div>
						<div class="cd-half-width">
							<h2>Jusqu'où pouvez-vous rêver ?</h2>
							<p>Votre Agence Marketing Au Cameroun
							</p>
							<a href="nos-services" class="cd-btn btn btn-primary solid">Faire un tour</a>
						</div> <!-- .cd-half-width -->

						<div class="cd-half-width cd-img-container">
							<img src="images/slider/bg-thumb1.png" alt="">
						</div> <!-- .cd-half-width.cd-img-container -->
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="images/slider/bg3.jpg" alt="slider">
						</div>
						<div class="cd-half-width cd-img-container img-right">
							<img src="images/slider/bg-thumb2.png" alt="">
						</div> <!-- .cd-half-width.cd-img-container -->
						<div class="cd-half-width">
							<h2>Votre défi est notre progrès</h2>
							<p>Votre Agence Creative Au Cameroun
							</p>
							<a href="nos-services" class="cd-btn btn btn-primary white">Commencer</a>
							<a href="a-propos-de-nous" class="cd-btn btn secondary btn-primary solid">En savoir plus</a>
						</div> <!-- .cd-half-width -->
					</li>
					<li class="cd-bg-video">
						<div class="cd-full-width">
							<h2>Solutions numériques créatives et innovantes </h2>
							<h3>Votre Agence Web-Digitale Au Cameroun</h3>

							<a href="a-propos-de-nous" class="cd-btn btn btn-primary solid">En savoir plus</a>
						</div> <!-- .cd-full-width -->

						<div class="cd-bg-video-wrapper" data-video="videos/video">
							<!-- video element will be loaded using jQuery -->
						</div> <!-- .cd-bg-video-wrapper -->
					</li>
				</ul>
				<!--/ cd-hero-slider -->

				<div class="cd-slider-nav">
					<nav>
						<span class="cd-marker item-1"></span>
						<ul>
							<li class="selected"><a href="#0"><i class="fa fa-bicycle"></i> Inventer</a></li>
							<li><a href="#0"><i class="fa fa-hotel"></i> Rêver</a></li>
							<li><a href="#0"><i class="fa fa-android"></i> Tech</a></li>
							<li class="video"><a href="#0"><i class="fa fa-video-camera"></i> Vidéo</a></li>
						</ul>
					</nav>
				</div> <!-- .cd-slider-nav -->

			</div>
			<!--/ Main slider end -->
		</section>
		<!--/ Slider end -->


		<!-- Service box start -->
		<section id="service" class="service angle">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading">
						<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
						<h2 class="title">Services que nous offrons <span class="title-desc">Une équipe dynamique, en quête continue de l'innovation avec plusieurs années d'expérience !</span></h2>
					</div>
				</div><!-- Title row end -->

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
								<h3>SITE VITRINE</h3>
								<p>Nos experts créent pour vous un site vitrine clé en main, mettant en avant votre
									entreprise et vos services. Faites découvrir votre activité au plus grand nombre,
									développez votre image de marque et fidélisez vos visiteurs !</p>
							</div>
						</div>
						<!--/ End first service -->

						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
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

						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
								<h3>APPLICATIONS</h3>
								<p>Nos experts en technologies React Native, Java, Flutter ou encore Symfony développent pour vous de superbes apps intuitives, 100 % personnalisées, conçues pour iOS et Android.</p>
							</div>
						</div>
						<!--/ End Third service -->

						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
								<h3>UX/UI DESIGN</h3>
								<p>Nos UX/UI designers créent pour vos visiteurs des interfaces intuitives et ergonomiques. Offrons à vos internautes la meilleure expérience de navigation possible !.</p>
							</div>
						</div>
						<!--/ End 4th service -->
					</div>
				</div><!-- Content row end -->

				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">
						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-bar-chart"></i></span>
								<h3>SEO</h3>
								<p>Nos experts en référencement vous conseillent sur la meilleure stratégie SEO pour
									votre site. Contenu, technique, netlinking : boostez votre trafic organique et votre
									chiffre d’affaires !</p>
							</div>
						</div>
						<!--/ End first service -->

						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class='fa fa-area-chart'></i></span>
								<h3>ERP/CRM</h3>
								<p>Nos développeurs utilisent des progiciels de gestion comme ODOO, SAP ou Microsoft 365
									pour réaliser des outils uniques et sur mesure. Profitez d’une solution ERP 100 %
									adaptée aux enjeux de votre métier !</p>
							</div>

						</div>
						<!--/ End Second service -->

						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class='fa fa-database'></i></span>
								<h3>Analyse des données</h3>
								<p>Oaliv aide les entreprises de plus de 30 secteurs à intégrer, agréger et analyser
									divers types de données provenant de plusieurs sources de données pour répondre à
									leurs besoins les plus délibérés au niveau des départements et de l'entreprise.</p>
							</div>
						</div>
						<!--/ End 4th service -->

						<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
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
			</div>
			<!--/ Container end -->
		</section>
		<!--/ Service box end -->



		<!-- Portfolio start -->
		<section id="portfolio" class="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading">
						<span class="title-icon classic pull-left"><i class="fa fa-suitcase"></i></span>
						<h2 class="title classic">NOTRE TRAVAIL</h2>
					</div>
				</div> <!-- Title row end -->

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
			</div>

			<div class="container-fluid">
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

						<div class="col-sm-3 website isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/yoursever.png" alt="Yours Ever">
									<img src="images/portfolio/yoursa.png" alt="Yours Ever">
									<figcaption>
										<h3>Yours Ever</h3>
										<a class="link icon-pentagon" href="https://your-sever.com/"><i class="fa fa-link"></i></a>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/yoursever.png"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio2.jpg" alt="">
									<figcaption>
										<h3>Shopping Bag</h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio2.jpg"><i class="fa fa-search"></i></a>
									</figcaption>
								</figure>
							</div>
						</div><!-- Isotope item end -->

						<div class="col-sm-3 web-design isotope-item">
							<div class="grid">
								<figure class="effect-oscar">
									<img src="images/portfolio/portfolio3.jpg" alt="">
									<figcaption>
										<h3>Mockups</h3>
										<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio3.jpg"><i class="fa fa-search"></i></a>
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


					</div><!-- Isotope content end -->
				</div><!-- Content row end -->
			</div><!-- Container end -->
		</section><!-- Portfolio end -->

		<!-- Counter Strat -->
		<section class="ts_counter no-padding">
			<div class="container-fluid">
				<div class="row facts-wrapper wow fadeInLeft text-center">
					<div class="facts one col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-user"></i></span>
						<div class="facts-num">
							<span class="counter"> +100</span>
						</div>
						<h3>Clients</h3>
					</div>

					<div class="facts two col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-institution"></i></span>
						<div class="facts-num">
							<span class="counter">+30</span>
						</div>
						<h3>Secteurs d'activités</h3>
					</div>

					<div class="facts three col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
						<div class="facts-num">
							<span class="counter">+80</span>
						</div>
						<h3>Projects</h3>
					</div>

					<div class="facts four col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-trophy"></i></span>
						<div class="facts-num">
							<span class="counter">+20</span>
						</div>
						<h3>Certifications</h3>
					</div>

				</div>
			</div>
			<!--/ Container end -->
		</section>
		<!--/ Counter end -->

		<!-- Feature box start -->
		<section id="feature" class="feature">
			<div class="container">
				<div class="row">
					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-heart-o"></i></span>
						<div class="feature-content">
							<h3>DESIGN ÉPURE &amp; MODERNE</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End first featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-codepen"></i></span>
						<div class="feature-content">
							<h3>Découvrez la tendance du marketing numérique</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End 2nd featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-film"></i></span>
						<div class="feature-content">
							<h3>Meilleures idées de contenu pour vos pages</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End 3rd featurebox -->
				</div><!-- Content row end -->

				<div class="gap-40"></div>

				<div class="row">
					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-newspaper-o"></i></span>
						<div class="feature-content">
							<h3>CONCEPT POLYVALENT</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End 1st featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-desktop"></i></span>
						<div class="feature-content">
							<h3>Mise en page réactive</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End 2nd featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-pagelines"></i></span>
						<div class="feature-content">
							<h3>Découvrez et explorez nos conseils SEO</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End 3rd featurebox -->

				</div><!-- Content row end -->

				<div class="gap-40"></div>

				<div class="row">
					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-recycle"></i></span>
						<div class="feature-content">
							<h3>Mises à jour gratuites</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End first featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
						<div class="feature-content">
							<h3>Des possibilités infinies</h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End first featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-whatsapp"></i></span>
						<div class="feature-content">
							<h3>Assistance en direct 24/7 </h3>
							<!--<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>-->
						</div>
					</div>
					<!--/ End first featurebox -->
				</div><!-- Content row end -->

			</div>
			<!--/ Container end -->
		</section>
		<!--/ Feature box end -->


		<section id="image-block" class="image-block no-padding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 ts-padding" style="height:650px;background:url(images/banner-right-image.jpg) 50% 50% / cover no-repeat;">
					</div>
					<div class="col-md-6 ts-padding img-block-right">
						<div class="img-block-head text-center">
							<h2>En savoir plus sur notre entreprise</h2>
							<h3>Pourquoi nous choisir</h3>
							<p>La Meilleure Agence de Transformation Digitale au Cameroun, qui accompagne les TPE/PME et les Grandes Entreprises avec des Services et Solutions de Pointe.
							</p>
						</div>

						<div class="gap-30"></div>

						<div class="image-block-content">
							<span class="feature-icon pull-left"><i class="fa fa-bicycle"></i></span>
							<div class="feature-content">
								<h3>RAPIDITÉ D’EXÉCUTION</h3>
								<p>Une équipe organisée et une méthode agile pour mener à bien votre projet dans les meilleurs délais, sans renoncer à la qualité d’un travail bien fait..</p>
							</div>
						</div>
						<!--/ End 1st block -->

						<div class="image-block-content">
							<span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
							<div class="feature-content">
								<h3>LE PRIX JUSTE</h3>
								<p>Un devis en accord avec votre budget et les prix du marché, ni plus, ni moins.</p>
							</div>
						</div>
						<!--/ End 1st block -->

						<div class="image-block-content">
							<span class="feature-icon pull-left"><i class="fa fa-street-view"></i></span>
							<div class="feature-content">
								<h3>RÉALISATION 100 % PERSONNALISÉE</h3>
								<p>Aucun template prédéfini, nous réalisons des maquettes 100 % personnalisées selon vos enjeux et objectifs.</p>
							</div>
						</div>
						<!--/ End 1st block -->

					</div>
				</div>
			</div>
		</section>
		<!--/ Image block end -->


		<!-- Team start -->
		<!--<section id="team" class="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading">
						<span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
						<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4
								years experience</span></h2>
					</div>
				</div>Title row end -->

		<!--/<div class="row text-center">
					<div class="col-md-3 col-sm-6">
						<div class="team wow slideInLeft">
							<div class="img-hexagon">
								<img src="images/team/team1.jpg" alt="">
								<span class="img-top"></span>
								<span class="img-bottom"></span>
							</div>
							<div class="team-content">
								<h3>Vosgi Varduhi</h3>
								<p>Web Designer</p>
								<div class="team-social">
									<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
									<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>
					 Team 1 end -->
		<!--/<div class="col-md-3 col-sm-6">
						<div class="team wow slideInLeft">
							<div class="img-hexagon">
								<img src="images/team/team2.jpg" alt="">
								<span class="img-top"></span>
								<span class="img-bottom"></span>
							</div>
							<div class="team-content">
								<h3>Robert Aleska</h3>
								<p>Web Designer</p>
								<div class="team-social">
									<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
									<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>
					 Team 2 end -->
		<!--/<div class="col-md-3 col-sm-6">
						<div class="team wow slideInRight">
							<div class="img-hexagon">
								<img src="images/team/team3.jpg" alt="">
								<span class="img-top"></span>
								<span class="img-bottom"></span>
							</div>
							<div class="team-content">
								<h3>Taline Voski</h3>
								<p>Web Designer</p>
								<div class="team-social">
									<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
									<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>
					 Team 3 end -->
		<!--/<div class="col-md-3 col-sm-6">
						<div class="team animate wow slideInRight">
							<div class="img-hexagon">
								<img src="images/team/team4.jpg" alt="">
								<span class="img-top"></span>
								<span class="img-bottom"></span>
							</div>
							<div class="team-content">
								<h3>Alban Spencer</h3>
								<p>Web Designer</p>
								<div class="team-social">
									<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
									<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
									<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
									<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>
					 Team 4 end -->
		<!--/</div>
				 Content row end -->
		<!--/</div>
			 Container end -->
		<!--/</section>
		Team end -->

		<!-- Parallax 1 start -->
		<section class="parallax parallax1">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>COMMENT VOUS ACCOMPAGNER DANS LA RÉUSSITE DE VOTRE STRATÉGIE DIGITALE ?</h2>
						<h3>Et si nous vous disions que votre performance digitale naissait de l'association de notre savoir-faire et de la vision de votre entreprise ?</h3>
						<h4>C'est là notre métier : vous permettre de performer sur le web au travers de nos solutions digitales et de nos compétences dans les domaines de la création de site internet et plateforme E-commerce, les applications mobiles, l'expérience utilisateur, le référencement naturel, logiciel de relation client et d'optimisation des processus opérationnels...</h4><br>
						<p>
							<a href="contact" class="btn btn-primary white">Commencez maintenant</a>
							<a href="contact" class="btn btn-primary solid">Contatez nous</a>
						</p>
					</div>
				</div>
			</div><!-- Container end -->
		</section><!-- Parallax 1 end -->


		<!-- Clients start -->
		<section id="clients" class="clients">
			<div class="container">
				<div class="row wow fadeInLeft">
					<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
						<figure class="item client_logo">
							<a href="#">
								<img src="images/clients/client1.png" alt="Google Oaliv Douala Cameroun">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="images/clients/client2.jpg" alt="Microsoft Oaliv Douala Cameroun">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="images/clients/client3.png" alt="Facebook Oaliv Douala Cameroun">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="images/clients/client4.png" alt="Instagram Oaliv Douala Cameroun">
							</a>
						</figure>

						<figure class="item client_logo">
							<a href="#">
								<img src="images/clients/client5.png" alt="Samsung Oaliv Douala Cameroun">
							</a>
						</figure>
						
					</div><!-- Owl carousel end -->
				</div><!-- Main row end -->
			</div>
			<!--/ Container end -->
		</section>
		<!--/ Clients end -->


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