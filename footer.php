<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fabio
 */
global $post;
$footer = get_themebuilder_Id(get_the_ID(), 'footer');
/**
 * add header
 * hook _fabio_footer -- 10;
 */
do_action('_fabio_footer_content', $footer);
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
