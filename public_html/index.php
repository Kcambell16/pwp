<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- customer jquery validate-->
		<script src="js/jquery.validate.js" type="text/javascript"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- this is google recaptcha--->
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body>
		<!-- This is a test for background image -->

		<div class id="box-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
					</div>
					<div class="col-xs-6">
					</div>
					<div class="col-xs-6" id="boxhead">
						<h2>Kelly D. Campbell</h2>
						<h1> Web Developer</h1>
						<h3> Has an Eye for Beautiful Things </h3>
					</div>
				</div>
			</div>
		</div>

		<!-- End of Background image test -->

		<header>
			<nav class="navbar navbar-default navbar-fixed-bottom">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Oyin Developing</a>
					</div>
					<div class="collpase navbar-collapse" id="example">
						<ul class="nav navbar-nav">
							<li class="active"><a href="">Web Developer Extraordinare</a></li>
							<li class="active"><a href="">Resume</a></li>
							<li class="active"><a href="">Contact Me</a></li>
						</ul>
						<form action="" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Explore">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
						</ul>
						<ul class="nav navbar-nav navbar-right">
						</ul>
						</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>

		<!-- insert contact form -->
		<form id="contact-form" method="POST" action="php/mailer.php" novalidate>
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
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
				</div>
			</div>
			<div class="form-group">
				<label for="message">Message <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-comment" aria-hidden="true"></i>
					</div>
					<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
				</div>
			</div>

			<!-- Google reCAPTCHA -->
			<div class="g-recaptcha" data-sitekey="6LfElA0UAAAAAIPR2M15qAh5qkWlXGlRdtJw3Ud0
"></div>

			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>


		<!--messages output area error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
			</div>
		</form>


		</body>
		<!--
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<!--<img class="img-circle" src="documentation/img/kcampbell.jpg" class="img-responsive" alt="kcampbell"  height="350" width="350">-->
		<!--
						</div>
						<div class="col-md-">
							Spicy jalapeno bacon ipsum dolor amet beef chicken drumstick meatball alcatra, andouille shankle ribeye biltong. Chicken capicola pork loin ham pork chop bacon short loin ground round jowl porchetta corned beef landjaeger hamburger shoulder pig. Kevin turkey pork belly pork chop pastrami capicola jerky strip steak swine corned beef bresaola shank shoulder chuck. Leberkas kielbasa tongue, venison strip steak turkey ribeye meatball tri-tip frankfurter pork belly short ribs fatback jowl pastrami. Kevin biltong shoulder spare ribs flank pancetta bacon, jowl ball tip sirloin. Venison cupim doner capicola, turkey landjaeger kevin filet mignon shank picanha shankle pork t-bone prosciutto.

							Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!
						</div>
					</div>


					<section>
						<h2> Work Title</h2>
					<div class="row">
						<div class="col-md-12">
							Spicy jalapeno bacon ipsum dolor amet beef chicken drumstick meatball alcatra, andouille shankle ribeye biltong. Chicken capicola pork loin ham pork chop bacon short loin ground round jowl porchetta corned beef landjaeger hamburger shoulder pig. Kevin turkey pork belly pork chop pastrami capicola jerky strip steak swine corned beef bresaola shank shoulder chuck. Leberkas kielbasa tongue, venison strip steak turkey ribeye meatball tri-tip frankfurter pork belly short ribs fatback jowl pastrami. Kevin biltong shoulder spare ribs flank pancetta bacon, jowl ball tip sirloin. Venison cupim doner capicola, turkey landjaeger kevin filet mignon shank picanha shankle pork t-bone prosciutto.
						</div>
					</div>
					</section>

					<section>
						<h2>Resume Title</h2>
						<div class="row">
							<div class="col-md-6">
								Spicy jalapeno bacon ipsum dolor amet beef chicken drumstick meatball alcatra, andouille shankle ribeye biltong. Chicken capicola pork loin ham pork chop bacon short loin ground round jowl porchetta corned beef landjaeger hamburger shoulder pig. Kevin turkey pork belly pork chop pastrami capicola jerky strip steak swine corned beef bresaola shank shoulder chuck. Leberkas kielbasa tongue, venison strip steak turkey ribeye meatball tri-tip frankfurter pork belly short ribs fatback jowl pastrami. Kevin biltong shoulder spare ribs flank pancetta bacon, jowl ball tip sirloin. Venison cupim doner capicola, turkey landjaeger kevin filet mignon shank picanha shankle pork t-bone prosciutto.
							</div>
							<div class="col-md-6">
								Spicy jalapeno bacon ipsum dolor amet beef chicken drumstick meatball alcatra, andouille shankle ribeye biltong. Chicken capicola pork loin ham pork chop bacon short loin ground round jowl porchetta corned beef landjaeger hamburger shoulder pig. Kevin turkey pork belly pork chop pastrami capicola jerky strip steak swine corned beef bresaola shank shoulder chuck. Leberkas kielbasa tongue, venison strip steak turkey ribeye meatball tri-tip frankfurter pork belly short ribs fatback jowl pastrami. Kevin biltong shoulder spare ribs flank pancetta bacon, jowl ball tip sirloin. Venison cupim doner capicola, turkey landjaeger kevin filet mignon shank picanha shankle pork t-bone prosciutto.
							</div>
						</div>
					</section>

					<!--section>
						<h2> Contact</h2>
						<div class="row">
							<div class="col-md-6">
								Spicy jalapeno bacon ipsum dolor amet beef chicken drumstick meatball alcatra, andouille shankle ribeye biltong. Chicken capicola pork loin ham pork chop bacon short loin ground round jowl porchetta corned beef landjaeger hamburger shoulder pig. Kevin turkey pork belly pork chop pastrami capicola jerky strip steak swine corned beef bresaola shank shoulder chuck. Leberkas kielbasa tongue, venison strip steak turkey ribeye meatball tri-tip frankfurter pork belly short ribs fatback jowl pastrami. Kevin biltong shoulder spare ribs flank pancetta bacon, jowl ball tip sirloin. Venison cupim doner capicola, turkey landjaeger kevin filet mignon shank picanha shankle pork t-bone prosciutto.
							</div>
						</div>
					</section -->
		<!--
					<section>
						<div class="row">
						<div class="col-md-6">
							<h3>Contact</h3>
						</div>
							<div class="col-md-6">
								<h3> MISC..</h3>
							</div>
						</div>
					</section>




				</div>



			</body>
		</html>
