<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- Loader -->
<!-- Click capture -->
<div class="click-capture"></div>

<!-- Navbar -->
<nav class="navbar navbar-desctop">
	<div class="min-nav-items position-relative w-100">

		<!-- Brand-->
		<a class="navbar-brand" href="#"><img src="img/logo (6).png" alt="" class="logo"></a>
		<div class="container d-block">
			<ul class="nav">
				<li class="nav-item"><a href="" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
				<li class="nav-item"><a href="#education" class="nav-link">Education</a></li>
				<li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
				<li class="nav-item"><a href="#product" class="nav-link">Product</a></li>
				<li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
				<li class="nav-item"><a href="#testimonials" class="nav-link">Testimonials</a></li>
				<li class="nav-item"><a href="#articles" class="nav-link">Articles</a></li>
				<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
				<span class="phone">+7 (212) 674-25-10</span>
			</ul>
		</div>

		<!-- Toggler -->
		<button class="toggler">
			<span class="toggler-icon"></span>
			<span class="toggler-icon"></span>
			<span class="toggler-icon"></span>
		</button>
	</div>
</nav>

<nav class="navbar-left">
	<div class="social">
		<ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">
			<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
		</ul>
	</div>
</nav>


<nav class="navbar-bottom">

	<!-- Copyright -->
	<div class="copy">
		<span>© Fabio. 2021</span>
	</div>

	<!-- Lang -->
	<div class="lang d-none d-sm-block">
		<span>EN</span>
		<span>FRA</span>
		<span>GER</span>
	</div>
</nav>

<!-- Navbar Mobile -->
<nav class="navbar navbar-mobile">
	<ion-icon class="close" name="close-outline"></ion-icon>

	<!-- language -->
	<ul class="language">
		<li class="active"><a href="#">ENG</a></li>
		<li><a href="#">FRA</a></li>
		<li><a href="#">GER</a></li>
	</ul>

	<ul class="navbar-nav navbar-nav-mobile">
		<li class="active"><a class="nav-link active" data-menuanchor="home" href="#home">Home</a></li>
		<li><a class="nav-link" data-menuanchor="experience" href="#experience">Experience</a></li>
		<li><a class="nav-link" data-menuanchor="education" href="#education">Education</a></li>
		<li><a class="nav-link" data-menuanchor="service" href="#service">Service</a></li>
		<li><a class="nav-link" data-menuanchor="product" href="#product">Product</a></li>
		<li><a class="nav-link" data-menuanchor="skills" href="#skills">Skills</a></li>
		<li><a class="nav-link" data-menuanchor="testimonials" href="#testimonials">Testimonials</a></li>
		<li><a class="nav-link" data-menuanchor="articles" href="#articles">Articles</a></li>
		<li><a class="nav-link" data-menuanchor="contact" href="#contact">Contact</a></li>
	</ul>
	<div class="navbar-mobile-footer">
		<div class="social">
			<ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">
				<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
				<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
				<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
			</ul>
		</div>
		<p>© 2020 COPIRIGHT. </br>
			ALL RIGHTS RESERVED.</p>
	</div>
</nav>
	