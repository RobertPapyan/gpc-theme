<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gpc
 */

get_header();
?>

	<main id="primary" class="site-main">

        <div class="not_found_container">
            <span><?php echo lang('Արդյունք չկա ․․․', 'Nothing found ...') ?></span>
        </div>

	</main><!-- #main -->

<?php
get_footer();
