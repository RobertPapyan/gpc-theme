<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gpc
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<div class="archive_title_container">
				<?php
				add_filter('get_the_archive_title_prefix','__return_false');
				?>
				<h1 class="archive_title"><?php echo get_the_archive_title(); ?></h1>
			</div>
			<div class="archive_items_container">
				<div class="archive_items_grid">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="archive_grid_item">
					<div class="archive_grid_item_img"><?php the_post_thumbnail();?></div>
					<a href="<?php the_permalink();?>" class="archive_grid_item_title"><?php the_title(); ?></a>
				</div>

				<?php endwhile;?>
				</div>
			</div>


			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
