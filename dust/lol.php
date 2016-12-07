<!-- Designed By: Mohit Mohta & Suryaveer -->
<!-- <?php $status="";?> -->
<?php
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("gymkhana");
	//echo $con;

	if(isset($_POST['adminsubmit']))
	{
		//$uName=$_GET['userName'];
		//$pas=$_GET['pwd'];
		$id=mysql_real_escape_string($_POST['adminid']);
	    $pwd=mysql_real_escape_string($_POST['adminpwd']);
		//echo $uName;
		$result=mysql_query("select * from userid where adminid='".htmlspecialchars($id,ENT_QUOTES)."' and adminpassword='".htmlspecialchars($pwd,ENT_QUOTES)."'");

		if(mysql_num_rows($result))
		{
			while($row=mysql_fetch_array($result))
			{
				echo $row[0];
			}
			echo "Welcome: ";
			echo $id;
			header("Location:detail1.html");
			
		}
		else if($id AND $pwd){

			echo "sorry there is no user with this name: so we are creating a account this name";
			$queryName=mysql_query("INSERT INTO userid (id,adminid,adminpassword,profile,name) VALUES (NULL, '$id','$pwd',null,null)");
			$_SESSION["name_s"]=$id;
			$_SESSION["pas_s"]=$pwd;
			header("Location: detail2.html");

		}
		else
		{
			echo "Plese enter right information :(";
		}
	}
?>
















































<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Gymkhana, IIT Indore</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- cards -->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="assets/js/modernizr.custom.js"></script>
		<!-- login form -->
		<link rel="stylesheet" type="text/css" href="login/css/normalize.css" />	
		<link rel="stylesheet" type="text/css" href="login/css/modal.css" />
		<script src="login/js/TweenMax.min.js"></script>
		<script src="login/js/jquery.min.js"></script>
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
								<div class="content_login">
									<button class="open-modal" id="login_button">Login Here</button>
								</div>
								<div class="modal-overlay"></div>
								<div class="modal-wrapper">
									<div class="modal js-blur">
										<button class="close-modal">X</button>
										<h2>Login</h2>
										<form method="post" >
											<input type="email"  name="adminid" placeholder="Email" class="login">
											<input type="password"  name="adminpwd" placeholder="Password" class="login" >
												<br>
											<button type="submit" class="open-modal" name="adminsubmit">Submit</button>
											<button type="reset" class="open-modal">Reset</button>
										</form>
										<!-- getting status -->
										<h1 style="color:orange;">
											<?php
												if(isset($_GET['status'])){
													$status = $_GET['status'];}
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
