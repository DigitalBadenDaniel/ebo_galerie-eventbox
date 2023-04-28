<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mindstudios
 */

get_header();
?>

<?php get_template_part('template-parts/header', 'search'); ?>

	<main id="primary" class="site-main">

        <section class="search-results">
            <div class="container">
                <?php if (have_posts()): ?>
                    <div class="row">
                        <?php while(have_posts()): the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <?php the_posts_navigation(); ?>
                <?php else: ?>
                    <?php get_template_part( 'template-parts/content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
