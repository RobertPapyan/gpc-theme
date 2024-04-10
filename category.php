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

			<div class="projects_title_container">
				<?php
				add_filter('get_the_archive_title_prefix','__return_false');
				?>
				<h1 class="projects_title"><?php echo get_the_archive_title(); ?></h1>
                <h3 class="projects_subtitle"><?php echo get_the_archive_description();?></h3>
			</div>
			<div class="projects_items_container">
				
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="projects_item">
                    <h3 class="projects_item_title"><?php the_title(); ?></h3>
                    <div class="projects_item_flex">
					    <div class="projects_item_img"><?php the_post_thumbnail();?></div>
                        <div class="projects_item_excerpt"><p><?php the_excerpt(); ?></p></div>
					</div>
                    <div class="projects_item_flex2">
                    <a href="<?php the_permalink();?>" class="projects_item_readmore"><span><?php echo get_theme_mod('readMoreButton')?></span> <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>

				<?php endwhile;?>
				
			</div>


			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
