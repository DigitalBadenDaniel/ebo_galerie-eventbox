<?php
/**
 * Frontpage template (/)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mindstudios
 */

get_header();
?>

<?php get_template_part('template-parts/header', 'page'); ?>

<main>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php require("inc/flexible-content.php"); ?>
    </article><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->
<?php get_footer(); ?>
