<?php
/*
  Template Name: Home
 */
?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mindstudios
 */
get_header();
?>
<?php $background_img = get_field('background-img'); ?>
<div class="mb-5 home-header" 
<?php if ($background_img) : ?>
         style="background-image: url('<?php echo esc_url($background_img['url']); ?>');"
     <?php else : ?>
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-header.jpg');"
     <?php endif;
     ?>    
     >

    <div class="pt-lg-6 pt-4">
        <div class="container">
            <div class="row flex-row align-items-center">
                <div class="col-lg-4 offset-lg-1 order-2 order-lg-1 col-9 offset-1">
                    <?php $inner_img = get_field('inner-img'); ?>
                    <?php $size = 'img_header'; ?>
                    <?php if ($inner_img) : ?>
                        <?php echo wp_get_attachment_image($inner_img, $size, '', array("class" => "img-fluid mt-lg-6 mt-lg-4")); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 offset-lg-1 order-1 order-lg-2">
                    <div class="my-6">
                        <?php if (have_rows('content_rechts')) : ?>
                            <?php while (have_rows('content_rechts')) : the_row(); ?>
                                <span><?php the_sub_field('subhead'); ?></span>
                                <h1 class="h2"><?php the_sub_field('headline'); ?></h1>

                                <?php if (have_rows('usp')) : ?>
                                    <ul class="check-list mb-lg-5">
                                        <?php while (have_rows('usp')) : the_row(); ?>
                                            <li><?php the_sub_field('usp-point'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php else : ?>
                                    <?php // no rows found ?>
                                <?php endif; ?>
                                <?php $button1 = get_sub_field('button1'); ?>
                                <?php if ($button1) : ?>
                                    <a href="<?php echo esc_url($button1['url']); ?>" class="btn-eb-light mr-3 mb-3 mb-lg-0 btn" target="<?php echo esc_attr($button1['target']); ?>"><?php echo esc_html($button1['title']); ?></a>
                                <?php endif; ?>
                                <?php $Button2 = get_sub_field('Button2'); ?>
                                <?php if ($Button2) : ?>
                                    <a href="<?php echo esc_url($Button2['url']); ?>" class="btn-eb btn mb-3 mb-lg-0" target="<?php echo esc_attr($Button2['target']); ?>"><?php echo esc_html($Button2['title']); ?></a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("inc/flexible-content.php"); ?>





<?php
get_footer();
