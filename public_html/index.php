<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- v Adds timestamp to css link in order to prevent caching, remove from production v -->
		<link rel="stylesheet" type="text/css" href="css/style.css"?<?php echo date('l jS \of F Y h:i:s A'); ?>>
		<!-- ^ Adds timestamp to css link in order to prevent caching, remove from production ^ -->

		<script src="js/script.js"></script>

		<!-- Explanation of the coding technique used on this website: http://giphy.com/gifs/teen-gossip-oceanup-k3niZvZOckJnq -->

		<title>Such Strange Dog Training</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<div class="under-box hidden-xs">
				<div class="outer-box">
					<!-- nav images -->
					<div class="img-box-1 navImg">
						<div class="text_over_image" onclick="showAbout();">
							<p>About</p>

						</div>
					</div>
					<div class="img-box-2 navImg">
						<div class="text_over_image" onclick="showPricing();">
							<p>Pricing</p>

						</div>
					</div>
					<div class="img-box-3 navImg">
						<div class="text_over_image" onclick="showResources();">
							<p>Resources</p>

						</div>
					</div>
					<div class="img-box-4 navImg">
						<div class="text_over_image" onclick="showContact();">
							Contact

						</div>
					</div>
					<!-- end nav images -->
				</div>
				<div class="text-box">
					<div class="back-text">
						<p class="back-arrow" onclick="hideContent();">&#x25c1;</p>
					</div>
					<div id="aboutContent">
						<p class="contentText">
							<span class="title-text">About</span>
							<br>
							<br>
							Such Strange Dog Training was founded on the principal that all dogs deserve the best life possible. We strive to provide training to dogs that need help. We cater to dogs who are shy, fearful, aggressive, reactive, and hyper energetic. Lead Trainer Chloe Davis-Masters is dedicated to science and relationship based training methods, focused on how dogs learn, and team building. Positive reinforcement, and resistance free training are paramount to Such Strange Dog's methods.
						</p>
					</div>
					<div id="pricingContent">
						<div class="title-text-padded">Pricing</div>
						<br>
						<br>
						<ul class="contentText">
							<li>Consultation - $50</li>
							<li>30 Minutes - $40</li>
							<li>45 Minutes - $50</li>
							<li>60 Minutes - $55</li>
							<li>90 Minutes - $70</li>
							<li>90 Minute Aggression Training Plan Consultation - $75</li>
						</ul>
					</div>
					<div id="resourcesContent">
						<div class="title-text-padded">Resources</div>
						<br>
						<br>
						<ul class="contentText">
							<li><a href="http://sfhumanesociety.org/" target="_blank">Santa Fe Animal Shelter</a></li>
							<li><a href="http://www.aspca.org/pet-care/dog-care/common-dog-behavior-issues" target="_blank">ASPCA - Common Dog Behavior Issues</a></li>
							<li>Behavior Help Hotline - (505)983-4309 x251</li>
						</ul>
					</div>
					<div id="contactContent">
						<div class="contentText-alt">
							<span class="title-text">Contact</span>
							<br>
							<br>


							<form id="contact-form" method="POST" action="php/mailer.php" novalidate>
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</div>
									<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment"></i>
									</div>
									<textarea name="message" rows="5" id="message" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>
								</div>
</div>

								<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6Ld7KhgUAAAAAJ0pFjInFNn9VrfWHF_VR4gV8ecT"></div>
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>
							<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="content-img-box">
					<span id="aboutImages">
					<div class="img-content-about-2"></div>
					<div class="img-content-about-1"></div>
					</span>
					<span id="pricingImages">
						<div class="img-content-pricing-1"></div>
						<div class="img-content-pricing-2"></div>
					</span>
					<span id="resourcesImages">
						<div class="img-content-resources-1"></div>
						<div class="img-content-resources-2"></div>
					</span>
					<span id="contactImages">
						<div class="img-content-contact-1"></div>
						<div class="img-content-contact-2"></div>
					</span>
				</div>

			</div>


			<!-- Mobile -->
			<div class="m-under-box visible-xs">
				<div class="m-outer-box">
					<!-- nav images -->
					<div class="m-img-box-1 navImg">

						<div class="text_over_image" onclick="mShowAbout()">
							<p>About</p>
						</div>

					</div>
					<div class="m-img-box-2 navImg">

						<div class="text_over_image" onclick="mShowPricing()">
							<p>Pricing</p>

						</div>

					</div>
					<div class="m-img-box-3 navImg">

						<div class="text_over_image" onclick="mShowResources();">
							<p>Resources</p>

						</div>

					</div>
					<div class="m-img-box-4 navImg">

						<div class="text_over_image" onclick="mShowContact();">
							<p>Contact</p>

						</div>

					</div>
				</div>
				<!-- end nav images -->
				<div class="m-hide">
				<div class="m-text-box">
					<div class="m-back-text">
						<p class="m-back-arrow" onclick="hideContent();">&#x25c1;</p>
					</div>
					<div id="m-aboutContent">
						<p class="m-contentText">
							<span class="m-title-text">About</span>
							<br>
							<br>
							Such Strange Dog Training was founded on the principal that all dogs deserve the best life possible. We strive to provide training to dogs that need help. We cater to dogs who are shy, fearful, aggressive, reactive, and hyper energetic. Lead Trainer Chloe Davis-Masters is dedicated to science and relationship based training methods, focused on how dogs learn, and team building. Positive reinforcement, and resistance free training are paramount to Such Strange Dog's methods.
						</p>
					</div>
					<div id="m-pricingContent">
						<div class="title-text-padded">Pricing</div>
						<br>
						<br>
						<ul class="m-contentText">
							<li>Consultation - $50</li>
							<li>30 Minutes - $40</li>
							<li>45 Minutes - $50</li>
							<li>60 Minutes - $55</li>
							<li>90 Minutes - $70</li>
							<li>90 Minute Aggression Training Plan Consultation - $75</li>
						</ul>
					</div>
					<div id="m-resourcesContent">
						<div class="title-text-padded">Resources</div>
						<br>
						<br>
						<ul class="contentText">
							<li><a href="http://sfhumanesociety.org/" target="_blank">Santa Fe Animal Shelter</a></li>
							<li><a href="http://www.aspca.org/pet-care/dog-care/common-dog-behavior-issues" target="_blank">ASPCA - Common Dog Behavior Issues</a></li>
							<li>Behavior Help Hotline - (505)983-4309 x251</li>
						</ul>
					</div>
					<div id="m-contactContent">
						<div class="m-contentText-alt"><form id="contact-form" method="POST" action="php/mailer.php" novalidate>
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</div>
									<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment"></i>
									</div>
									<textarea name="message" rows="5" id="message" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6Ld7KhgUAAAAAJ0pFjInFNn9VrfWHF_VR4gV8ecT"></div>
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form></div>
						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
					</div>
				</div>
			</div>
			</div>

		</div>
		<footer>
		</footer>
	</body>
</html>
