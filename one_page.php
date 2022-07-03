<?php
/**
* Template Name: OnePage 
 */
get_header('onepage');
?>
<div id="pagepiling">
	<?php the_content(); ?>
</div>
<div class="line">
	<span></span>
	<span></span>
	<span></span>
</div>

<!-- Scrollbar -->
<div class="progress-nav">
	<ul class="navbar-nav">
		<li data-menuanchor="home" class="active"></li>
		<li data-menuanchor="experience"></li>
		<li data-menuanchor="education"></li>
		<li data-menuanchor="service"></li>
		<li data-menuanchor="product"></li>
		<li data-menuanchor="skills"></li>
		<li data-menuanchor="testimonials"></li>
		<li data-menuanchor="articles"></li>
		<li data-menuanchor="contact"></li>
	</ul>
</div>
<?php
get_footer('onepage');
