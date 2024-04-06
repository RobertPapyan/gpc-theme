<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gpc
 */

?>

	<footer id="footer" class="footer">
		<div class="footer_container">
			<div class="footer_main">
				<div class="footer_main_item">
					<div class="footer_logo_container">
					<a href="<?php echo get_theme_mod('footerlogo1_url')?>">
						<img src="<?php echo get_theme_mod('footerlogo1')?>" alt="">
					</a>
					</div>
					<div class="footer_logo_container footer_logo_container_2">
					<a href="<?php echo get_theme_mod('footerlogo2_url')?>">
						<img src="<?php echo get_theme_mod('footerlogo2')?>" alt="">
					</a>
					<a href="<?php echo get_theme_mod('footerlogo3_url')?>">
						<img src="<?php echo get_theme_mod('footerlogo3')?>" alt="">
					</a>
					</div>
					<div class="footer_logo_container">
					<a href="<?php echo get_theme_mod('footerlogo4_url')?>">
						<img src="<?php echo get_theme_mod('footerlogo4')?>" alt="">
					</a>
					</div>
				</div>


				<div class="footer_main_item">
					<h4><?php echo get_theme_mod('footerlocations') ?></h4>
					<p class="footer_p_hasafter"><?php echo get_theme_mod('footerlocation1') ?></p>
					<p><?php echo get_theme_mod('footerlocation2') ?></p>
				</div>

				<div class="footer_main_item">
					<h4><?php echo get_theme_mod('footercontacts') ?></h4>
					<p><?php echo get_theme_mod('footerphone') ?></p>
					<p><?php echo get_theme_mod('footermail') ?></p>

					<h4><?php echo get_theme_mod('footerOnSocialMedia') ?></h4>
					<div class="footer_social_icons_container">
					<a href="<?php echo get_theme_mod('footerInstagramUrl') ?>"><i class="fa-brands fa-square-instagram"></i></a>
					<a href="<?php echo get_theme_mod('footerFaceBookUrl') ?>"><i class="fa-brands fa-square-facebook"></i></a>
					<a href="<?php echo get_theme_mod('footerYoutubeUrl') ?>"><i class="fa-brands fa-square-youtube"></i></a>
					</div>
				</div>
			</div>
			<div class="footer_copy">
				<p><?php echo get_theme_mod('footerCopyright') ?></p>

			</div>
		</div>
		<?php wp_footer(); ?>
	</footer><!-- #colophon -->




</body>
</html>
