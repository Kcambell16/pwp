<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

		<!-- Link php/css file -->
		<!--		<link rel="stylesheet" href="css/stylesheet.css" media="style">-->
		<link type="text/css" href="css/stylesheet.css" rel="stylesheet">
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>

		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- customer jquery validate-->
		<script src="js/jquery.validate.js" type="text/javascript"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<!-- this is google recaptcha--->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

	</head>
	<body>
		<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

			<!-- Navigation -->
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
							Menu <i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand page-scroll" href="#page-top">
							<i class="fa fa-play-circle"></i> <span class="light">Start</span> Bootstrap
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
						<ul class="nav navbar-nav">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<a class="page-scroll" href="#about">About</a>
							</li>
							<li>
								<a class="page-scroll" href="#download">Download</a>
							</li>
							<li>
								<a class="page-scroll" href="#contact">Contact</a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>

			<!-- Intro Header -->
			<header class="intro">
				<div class="intro-body">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h1 class="brand-heading">Grayscale</h1>
								<p class="intro-text">A free, responsive, one page Bootstrap theme.
									<br>Created by Start Bootstrap.</p>
								<a href="#about" class="btn btn-circle page-scroll">
									<i class="fa fa-angle-double-down animated"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- About Section -->
			<section id="about" class="container content-section text-center">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<h2>About Grayscale</h2>
						<p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
						<p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
						<p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
					</div>
				</div>
			</section>

			<!-- Download Section -->
			<section id="download" class="content-section text-center">
				<div class="download-section">
					<div class="container">
						<div class="col-lg-8 col-lg-offset-2">
							<h2>Download Resume</h2>
							<p>You can download an up to date resume</p>
							<a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
						</div>
					</div>
				</div>
			</section>

			<!-- Contact Section -->
			<section id="contact" class="container content-section text-center">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<h2>Contact Start Bootstrap</h2>
						<p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
						<p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
						</p>
						<ul class="list-inline banner-social-buttons">
							<li>
								<a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
							</li>
							<li>
								<a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
							</li>
							<li>
								<a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Map Section -->
			<div id="map"></div>

			<!-- Footer -->
			<footer>
				<div class="container text-center">
					<p>Copyright &copy; Your Website 2016</p>
				</div>
			</footer>

			<!-- jQuery -->
			<script src="vendor/jquery/jquery.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

			<!-- Plugin JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

			<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

			<!-- Theme JavaScript -->
			<script src="js/grayscale.min.js"></script>


		<!-- <div class="title" >
			<div>
				<h1>Kelly Campbell</h1>
				<h4>Web Developer</h4>
			</div>
		</div><!--/.container-->


		<!-- containers for spacing
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="..." alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="..." alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="..." alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- modal fade
		<div class="modal fade" id="contact-form-modal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">

						<!-- insert contact form
						<form id="contact-form" method="POST" action="php/mailer.php" novalidate>
							<div id="boxhead">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject"
												 placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="5" id="message" name="message"
													 placeholder="Message (2000 characters max)"></textarea>
									</div>
								</div>

								<!-- Google reCAPTCHA
								<div class="g-recaptcha" data-sitekey="6LfElA0UAAAAAIPR2M15qAh5qkWlXGlRdtJw3Ud0
"></div>
								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send
								</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>

						<!--messages output area error/success output
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>
					</div><!-- /.modal-content
				</div><!-- /.modal-dialog
			</div><!-- /.modal
		</div>
		</div>


		<!-- footer
		<nav class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" data-toggle="modal" data-target="#contact-form-modal">CONTACT ME</a>
				</div>
				<div>
					<ul class="nav navbar-nav navbar-right" id="navbar">
						<li><a>Kcampbell5784@gmail.com</a></li>
						<li><a>(484)-358-2153</a></li>
					</ul>
				</div>
			</div>
		</nav>

	</body>
</html>