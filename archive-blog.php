<?php
/*
  Template Name: Termine
 */
?>
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


<main id="primary">
    <div class="mb-5 home-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-header.jpg');">
    <div class="pt-lg-6 pt-4 <?php echo $overlap ?>">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center pb-6">
                            <h1 class="small-underline-center"><?php _e('Fotobox Blog', 'digitalbaden'); ?></h1>
                            <p>Als Spezialist für die Vermietung von professionellen Fotobox-Systemen in ganz Deutschland garantieren wir dir begeisterte Gäste und super Stimmung bis zum Schluss des Festes. Du suchst eine Fotokiste für deine Hochzeit, Geburtstag, die Firmenfeier oder etwas besonderes für deinen Messestand? Mit den individuellen Sofort-Ausdrucken und weiteren einzigartigen Features und Marketing-Tools wird dein Event unvergesslich. Und das zum besten Preis-Leistungs-Verhältnis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="container block">

        <div class="row">
            <?php
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 100,
                'orderby' => 'meta_value',
                'order' => 'ASC',
            );
            $loop = new WP_Query($args);
            $counter = 1;
            while ($loop->have_posts()) : $loop->the_post();
                ?>   
                <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="1500">
                    <div class="">
                        <h2 class="h5"><?php the_title(); ?></h2>
                        <p class="small"><?php the_field('lead_text'); ?></p>
                        <a class="btn btn-eb-light" href="<?php the_permalink(); ?>" title="<?php _e('Mehr über', 'digitalbaden'); ?> <?php the_title(); ?> <?php _e('erfahren', 'digitalbaden'); ?>"><?php _e('Weiterlesen', 'digitalbaden'); ?></a>
                    </div>
                </div>
                <?php $counter++ ?>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>    
        </div>
    </div>  


    <?php $blog_content = new WP_Query(['post_type' => 'page', 'p' => 101]); ?>
        <?php if ($blog_content->have_posts()) while ($blog_content->have_posts()): $blog_content->the_post(); ?>
            <article id="post-<?= get_the_ID(); ?>">
                <?php require("inc/flexible-content.php"); ?>
            <?php require("template-parts/footer-image.php"); ?>
            </article><!-- #post-<?= get_the_ID(); ?> -->
        <?php endwhile; ?>
<?php wp_reset_postdata() ?>
</main><!-- #main -->

<?php
get_footer();
