<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gpc
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="single_hero" style="background-image: url(<?php the_post_thumbnail_url()?>)">
				<div class="single_hero_background_color">
    			<div class="single_hero_container">
       				<h1 class="single_hero_h1"><?php the_title(); ?></h1>
        			<div class="single_hero_separator"></div>
        			<h3 class="single_hero_h3"><?php the_excerpt()?></h3>
   			 	</div>
				</div>
			</div>
			<div class="single_main_container">
			<?php
			get_template_part('includes/page-content','content');

			

		endwhile; // End of the loop.
		?>
			</div>
	</main><!-- #main -->

<?php

get_footer();
