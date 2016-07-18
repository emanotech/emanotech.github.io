<?php
if(isset($_POST["submit"])) {
$recipient = "brentw.white@gmail.com"; //my email
echo $subject = 'Email message from Point Plumbing';
echo $name = $_POST ["yourName"];
echo $email = $_POST["yourEmail"];
echo $phone = $_POST["yourPhone"];
echo $location = $_POST["yourLocate"];
echo  $message = $_POST["yourMessage"];

 $mailBody="Name: $name\nEmail: $email\n\n$message";

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>




<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Emanotech LLC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">| Emanotech</span>
								</a>

							<!-- Nav -->
<!--
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
-->
						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Services</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
<!--
								<h1>Emanotech, LLC</h1>
-->
							<p align="center"> Management consulting, strategy, and solutions for pharmaceutical IT<p>
							</header>
							<section class="tiles">
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Project Management</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Technology Adoption</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Re-Engineering Best Practices</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<!--
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Tempus</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Aliquam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Veroeros</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ipsum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dolor</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Nullam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic10.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ultricies</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dictum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Pretium</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
							-->
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Us</h2>
								<!-- <form method="post" action="mailform.php">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>

									<div>
										<p><br /><br /><br />
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form> -->

								<form action="" method="post" id="spaceing" data-abide>
        <div class="form-bg">
            <div class="row">
                <div id="name" class="large-6 medium-6 small-12 columns">
                    <label> <h5>Name</h5>
                        <input type="text" name="yourName" placeholder="What is you're name?"></input>
                    </label>
                </div>

                <div id="email" class="large-6 medium-6 small-12 columns">
                    <label><h5>Email</h5>
                        <input type="email" name="yourEmail" placeholder="Please enter in you're email."required></input>
                    </label>
                    <small class="error">An email Address is required.</small>
                </div>
            </div>

                <div class="row">
                    <div id="phone"class="large-6 medium-6 small-12 columns">
                        <label><h5>Phone</h5>
                            <input type="text" name="yourPhone" placeholder="Please enter you're phone number."></input>
                        </label>
                    </div>

                    <div id="location" class="large-6 medium-6 small-12 columns">
                        <label><h5>Location</h5>
                            <input type="text" name="yourLocate" placeholder="Where on Oahu are you currently living?"></input>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div id="message-area" class="large-12 medium-12 small-12 columns">
                        <label><h5>Message</h5>
                            <textarea id="message" name="yourMessage" placeholder="Please tell us about you're plumbing issues."></textarea>
                        </label>
                    </div>
                </div>

            <div class="row">
                <div id="submit" class="large-3 medium-3 small-3 columns">
                    <button name="submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    	</form>
					</section>




							<ul class="copyright">
								<li>&copy; 2016 Emanotech LLC. All rights reserved</li><li>Design inspired by: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
