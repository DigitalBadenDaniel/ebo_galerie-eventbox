<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mindstudios
 */

get_header();
?>

<?php get_template_part('template-parts/header', 'archive'); ?>

    <main id="primary">

        <?php $blog_content = new WP_Query(['post_type' => 'page', 'p' => 67]); ?>

        <?php if($blog_content->have_posts()) while($blog_content->have_posts()): $blog_content->the_post(); ?>
            <article id="post-<?= get_the_ID(); ?>">
                <?php require("inc/flexible-content.php"); ?>
            </article><!-- #post-<?= get_the_ID(); ?> -->
        <?php endwhile; ?>
        <?php wp_reset_postdata() ?>

        <section class="categories mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-right">
                        <?php wp_list_categories([
                            'depth' => 1,
                            'title_li' => ''
                        ]) ?>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/block', 'hr'); ?>

        <section class="posts">
            <div class="container">
                <?php if ( have_posts() ) : ?>
                    <div class="row">
                        <?php while(have_posts()): the_post() ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <?php get_template_part('template-parts/content', 'post-alt'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p>Nix</p>
                <?php endif; ?>
                <?php the_posts_navigation(); ?>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
