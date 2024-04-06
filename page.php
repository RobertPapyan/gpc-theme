<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gpc
 */

get_header();
?>

	<main id="primary" class="site-main">

	
	<?php
		if(is_front_page()){
			get_template_part('includes/landing-content','content');
		};
		get_template_part('includes/page-content','content');
	?>
		

	</main><!-- #main -->

<?php

get_footer();
