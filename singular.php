<?php
get_header();
?>

<?php get_template_part('template-parts/header', get_post_type()); ?>

<main>
    <?php while(have_posts()): the_post() ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php require("inc/flexible-content.php"); ?>
        </article><!-- #post-<?php the_ID(); ?> -->
    <?php endwhile; ?>
</main><!-- #main -->

<?php get_footer(); ?>
