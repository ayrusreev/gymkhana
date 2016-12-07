<!-- Designed By: Mohit Mohta & Suryaveer -->
<?php $status="";?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Gymkhana, IIT Indore</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!-- cards -->
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<script src="assets/js/modernizr.custom.js"></script>
		<!-- login form -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />	
		<link rel="stylesheet" type="text/css" href="css/modal.css" />
		<script src="js/TweenMax.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<!-- /// -->

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<div class="content">
						<h1>Student Gymkhana</h1>
						<h2>We welcome you to the official<br />
						page of Student Gymkhana, IIT Indore</h2>
						<a href="#" class="button big alt"><span>Visit</span></a>
						<!-- <a href="#" class="button big alt"><span>Login</span></a> -->
							
					</div>
					<a href="#" class="button hidden"><span>Check In</span></a>
				</div>
			</header>

		<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">
						<ul class="grid cs-style-1">
							<li>
								<figure>
									<img src="images/pic01.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
										</a>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/pic02.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
										</a>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/pic04.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
										</a>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/pic05.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
											</figcaption>
										</a>
								</figure>
							</li>
							
							<li>
								<figure>
									<img src="images/pic08.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
											</figcaption>
										</a>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/pic09.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
											</figcaption>
										</a>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/pic11.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
												<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
											</figcaption>
										</a>
								</figure>
							</li>
							<li>
								<figure>
									<img src="images/pic12.jpg" alt="img01">
										<a href="detail1.html">
											<figcaption>
											<h3>The Literary Club</h3>
												<span>IIT INDORE<br>
													Club Head :James Bond<br>
												 	<span style="color : #7cc576;">Click for more details...</span>
											</figcaption>
											</figcaption>
										</a>
								</figure>
							</li>
						</ul>	
					</div>
				</div>
			</div>
			
			<!--  cards end ///////////////// -->

		<!-- Footer -->
			<footer id="footer">
				<a href="#" class="info fa fa-info-circle"><span>About</span></a>
				<div class="inner">
					<div class="content">
						<h3>Student Gymkahana, IIT Indore</h3>
						<p>In tempor porttitor nisl non elementum. Nulla ipsum ipsum, feugiat vitae vehicula vitae, imperdiet sed risus. Fusce sed dictum neque, id auctor felis. Praesent luctus sagittis viverra. Nulla erat nibh, fermentum quis enim ac, ultrices euismod augue. Proin ligula nibh, pretium at enim eget, tempor feugiat nulla.</p>
					</div>
					<!-- login form -->
								<div class="content_login" id="login_form">
									<button class="open-modal" id="login_button">Login Here</button>
									<!-- <a href="login_button" class="open-modal"><span>Visit</span></a> -->
								</div>
								<div class="modal-overlay"></div>
								<div class="modal-wrapper">
									<div class="modal js-blur">
										<button class="close-modal">X</button>
										<h2>Login</h2>
										<form method="post" action="login/loginrouter.php" >
											<input type="text"  name="adminid" placeholder="Email" class="login">
											<input type="password"  name="adminpwd" placeholder="Password" class="login" >
												<br>
											<button type="submit" class="open-modal" name="adminsubmit">Submit</button>
											<button type="reset" class="open-modal">Reset</button>
											<a href="#" class="button big alt"><span>Visit</span></a>
											<a href="#id" class="open-modal"><span class="label"></span></a>
										</form>
										<!-- getting status -->
										<h1 style="color:orange;">
											<?php
												if(isset($_GET['status'])){
													$status = $_GET['status'];
													}
													echo $status;
											?>
										</h1>	
									</div>
								</div>
								<script src="login/js/modal.js"></script>
							<!-- ////////////// -->
							
					<div class="copyright">
						<h3>Follow me</h3>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						</ul>
						&copy;Designed By: Mohit Mohta & Suryaveer <a href="#"></a>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script>
			function() {
			document.getElementById("next-slide").click();
			}
			</script>

			
	</body>
</html>
