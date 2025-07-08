<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANGUAGE ?>">

<head>
	<!-- Primary Meta Tags -->
	<title>Carrières - Rejoignez Notre Équipe Web | Oaliv Douala Cameroun</title>
	<meta name="title" content="Carrières - Rejoignez Notre Équipe Web | Oaliv Douala Cameroun">
	<meta name="description" content="Rejoignez l'équipe Oaliv ! Opportunités de carrière dans le développement web, marketing digital et UX/UI design. Postulez maintenant à Douala, Cameroun.">
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
					<h1>Carrières</h1>
					<ul class="breadcrumb">
						<li>Accueil</li>
						<li>Entreprise</li>
						<li><a href="#"> Carrières</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<!--<section id="main-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

						<h3 class="title-border">Senior Manager</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

						<div class="panel-group" id="accordionA">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseOne">Job Requirements</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>B.Sc. from any reputed university</li>
											<li>MBA in Marketing from any reputed university is very much desired</li>
											<li>Two (02) years of experience in Software Company is an advantage.</li>
											<li>Experience as Business Analyst will be an added advantage</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div>
							Panel 1 end-->

		<!--/ <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseTwo"> Job Responsibilities</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Global Business Development &amp; Strategic Account Management</li>
											<li>Marketing Research</li>
											<li>Marketing Collaterals development</li>
											<li>Business Analysis</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div>
							 Panel 2 end-->


		<!--/<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseThree"> What’s in it for you?</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Very Competitive Salary and Long Term Benefits with Excellent Career Opportunity in a Focused &amp; Stable organization.</li>
											<li>Training on new technology.</li>
											<li>Overseas Tour with Opportunity to work with Global Companies.</li>
											<li>Most importantly a friendly work environment with opportunity to learn from a number of highly skilled mentors.</li>
										</ul>
									</div>
								</div>
							</div>
							 Panel 3 end-->

		<!--/<div class="gap-20"></div>

							<p><a href="contact" class="btn btn-primary solid">Poser une question <i class="fa fa-long-arrow-right"></i></a></p>

						</div>
						 Accordion end -->

		<!--/ 1st career end -->

		<!--/<div class="gap-40"></div>

						<h3 class="title-border">Assistent Manager (P&amp;L)</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

						<div class="panel-group" id="accordionB">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseA">Job Requirements</a>
									</h4>
								</div>
								<div id="collapseA" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>B.Sc. from any reputed university</li>
											<li>MBA in Marketing from any reputed university is very much desired</li>
											<li>Two (02) years of experience in Software Company is an advantage.</li>
											<li>Experience as Business Analyst will be an added advantage</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div>
							 Panel 1 end-->

		<!--/<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseB"> Job Responsibilities</a>
									</h4>
								</div>
								<div id="collapseB" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Global Business Development &amp; Strategic Account Management</li>
											<li>Marketing Research</li>
											<li>Marketing Collaterals development</li>
											<li>Business Analysis</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div>
							 Panel 2 end-->


		<!--/<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseC"> QU'EST-CE QUE CELA SIGNIFIE POUR VOUS?</a>
									</h4>
								</div>
								<div id="collapseC" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Salaire très compétitif et avantages à long terme avec une excellente opportunité de carrière dans une organisation ciblée et stable.</li>
											<li>Training on new technology.</li>
											<li>Tournée à l'étranger avec possibilité de travailler avec des entreprises mondiales.</li>
											<li>Most importantly a friendly work environment with opportunity to learn from a number of highly skilled mentors.</li>
										</ul>
									</div>
								</div>
							</div>
							 Panel 3 end-->

		<!--/<div class="gap-20"></div>

							<p><a href="contact" class="btn btn-primary solid">Poser une question <i class="fa fa-long-arrow-right"></i></a></p>

						</div>
						 Accordion end -->

		<!--/</div>
					 Content col end -->

		<!--/<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="sidebar sidebar-right">
							category start -->
		<!-- <div class="widget widget-categories">
								<h3>How to Apply</h3>
								<p>Send your cv, relevant work experience and anything else that will make you stand out to career@bizcraft.com</p>
							</div> category end -->

		<!-- tags start -->
		<!-- class="widget widget-tags">
								<h3>Why Us</h3>
								<p>We are an awward winning company. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>
							</div> tags end -->


		<!--</div>
						 Sidebar end -->
		<!--/</div>
					 Sidebar col end -->
		<!--/</div>
				 row end -->
		<!--/</div>
			 container end -->
		<!--/</section>
		 Main container end -->

		<section class="call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Pas encore disponible pour l'instant</h3>
						<a href="contact" class="pull-right btn btn-primary white">Poser vos questions</a>
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