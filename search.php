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
        <?php
        $search_query = get_search_query();
        ?>
        <?php if (have_posts()): ?>

            <div class="projects_title_container">

                <h1 class="search_title">
                    <?php echo lang("Որոնում ՝ ","Search : "); ?>
                    <span> <?php echo $search_query ?> </span>
                </h1>

            </div>
            <div class="projects_items_container">

                <?php
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="projects_item">
                        <h3 class="projects_item_title"><?php the_title(); ?></h3>
                        <div class="projects_item_flex">
                            <div class="projects_item_img"><?php the_post_thumbnail(); ?></div>
                            <div class="projects_item_excerpt">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <div class="projects_item_flex2">
                            <a href="<?php the_permalink(); ?>"
                               class="projects_item_readmore"><span><?php echo get_theme_mod('readMoreButton') ?></span> <i
                                        class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <div class="projects_pagination">
                    <?php the_posts_pagination(
                        array(
                            'mid_size' =>10,
                            'prev_text' => __('<', 'textdomain'),
                            'next_text' => __('>', 'textdomain'),
                        )
                    ); ?>
                </div>
            </div>


        <?php
        else:
        ?>
            <div class="not_found_container">
                <span><?php echo lang('Արդյունք չկա ․․․ ', 'Nothing found ... '); echo $search_query?> </span>
            </div>

        <?php endif; ?>

    </main><!-- #main -->

<?php

get_footer();
