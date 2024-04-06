<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gpc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="header" class="header">
		<div class="header_container">
		<div class="header_item">
			<?php
			the_custom_logo();
				?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="header_nav header_item">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'primary-menu'
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="header_item header_lang-switcher-container">
			<?php
			wp_nav_menu(array(
				'menu'=>'lang-switcher-arm',
				'menu_class'=>'lang-switcher'
			));
			?>
		</div>
		<nav class="header_mobile_nav" id="header_mobile_nav">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu-mobile',
					'menu_class' => 'primary-menu-mobile'
				)
			);
			?>
			<div class="header_lang-switcher-container-mobile">
			<?php
			wp_nav_menu(array(
				'menu'=>'lang-switcher-arm',
				'menu_class'=>'lang-switcher-mobile'
			));
			?>
		</div>
		</nav>
		<div class="header_item header_menubuttons">
			<button id="header_menu_burger"><i class="fa-solid fa-bars"></i></button>
			<button id="header_menu_x"><i class="fa-solid fa-x"></i></button>
		</div>
		</div>
	</header><!-- #masthead -->
