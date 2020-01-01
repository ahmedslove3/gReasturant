<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>G. Reasturant - Contact Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
	<link href="css/all.min.css" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

G. Reasturant


-->

<body>

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="http://localhost:8001/admin/voyager-assets?path=images%2Flogo-icon-light.png" style="width:80px" alt="Logo" class="tm-site-logo" />
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">G. Reasturant</h1>
								<h6 class="tm-site-description">Happiness is a full belly</h6>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="/" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="/about" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="/contact" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Contact Page</h2>

			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="" method="POST" class="tm-contact-form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="" />
							</div>

							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="" />
							</div>

							<div class="form-group">
								<textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
							</div>

							<div class="form-group tm-d-flex">
								<button type="submit" class="tm-btn tm-btn-success tm-btn-right">
									Send
								</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Our Address</h4>
							<address>
								Abdo basha
							</address>
							<a href="tel:000-0010-0110" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>1000011000
							</a>
							<a href="mailto:info@company.co" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>g@reasturan.com
							</a>

						</div>
					</div>
				</div>
			</div>




		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 G. Reasturant

			</p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function() {
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
					}
				});
			}
		});
	</script>
</body>

</html>