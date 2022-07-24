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

<?php
$opt = get_option('fabio_opt');
$logo_one_page = $opt['logo_one_page']['url'];
$one_dark_logo = $opt['one_dark_logo']['url'];
$menu_content_no = fabio_opt('menu_phone_number');

$facebook_url = $opt['facebook_url'];
$twitter_url  = $opt['twitter_url'];
$linkedin_url = $opt['linkedin_url'];

$copy_right_content  = isset( $opt['copy_right_text_menu']) ? $opt['copy_right_text_menu'] : '';

?>

<!-- Navbar -->
<nav class="navbar navbar-desctop">
	<div class="min-nav-items position-relative w-100">
		<!-- Brand-->
		<a class="navbar-brand" href="#">
			<img src="<?php echo esc_url( $logo_one_page ); ?>" alt="" class="logo">
			<img src="<?php echo esc_url( $one_dark_logo ); ?>" alt="" class="logo2">
		</a>
		<div class="container d-block">
			<?php
				wp_nav_menu([
					'theme_location' => 'one_page_menu',
					'container'      => 'ul',
					'menu_class'	  =>  'nav nav-item',
					'walker'         => new fabio_onepage_nav_walker()
				]);
			?>
			<?php if(!empty($menu_content_no)): ?>
			<span class="phone"><?php echo wp_kses_post($menu_content_no); ?></span>
			<?php endif; ?>
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
			<?php if($facebook_url): ?>
			<li><a href="<?php echo esc_url( $facebook_url ); ?>"><ion-icon name="logo-facebook"></ion-icon></a></li>
			<?php endif; ?>
			<?php if($twitter_url): ?>
			<li><a href="<?php echo esc_url( $twitter_url ); ?>"><ion-icon name="logo-twitter"></ion-icon></a></li>
			<?php endif; ?>
			<?php if($linkedin_url): ?>
			<li><a href="<?php echo esc_url( $linkedin_url ); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>
<?php if(!empty( $copy_right_content )): ?>
<nav class="navbar-bottom">
	<!-- Copyright -->
	<div class="copy">
		<span><?php echo wp_kses_post($copy_right_content); ?></span>
	</div>
</nav>
<?php endif; ?>
<!-- Navbar Mobile -->

<nav class="navbar navbar-mobile">
	<ion-icon class="close" name="close-outline"></ion-icon>
	<?php
		wp_nav_menu([
			'theme_location' => 'one_page_menu',
			'container'      => 'ul',
			'menu_class'	  =>  'navbar-nav navbar-nav-mobile nav nav-item',
			'walker'         => new fabio_onepage_nav_walker()
		]);
	?>
	<div class="navbar-mobile-footer">
		<div class="social">
			<ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">
			<?php if($facebook_url): ?>
				<li><a href="<?php echo esc_url( $facebook_url ); ?>"><ion-icon name="logo-facebook"></ion-icon></a></li>
			<?php endif; ?>
			<?php if($twitter_url): ?>
				<li><a href="<?php echo esc_url( $twitter_url ); ?>"><ion-icon name="logo-twitter"></ion-icon></a></li>
			<?php endif; ?>
			<?php if($linkedin_url): ?>
				<li><a href="<?php echo esc_url( $linkedin_url ); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></li>
			<?php endif; ?>
			</ul>
		</div>
		<?php if(!empty( $copy_right_content )): ?>
		<p><?php echo wp_kses_post($copy_right_content); ?></p>
		<?php endif; ?>
	</div>
</nav>
	