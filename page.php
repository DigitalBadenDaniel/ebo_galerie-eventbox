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
 * @package digitalbaden
 */
get_header();
?>

<?php if ( get_field( 'bild_overlap' ) == 1 ) : ?>
	<?php 
        $overlap = "pb-2";
        ?>
<?php else : ?>
	<?php 
        $overlap = "pb-0";
        ?>
<?php endif; ?>

<div class="mb-5 home-header" style="
    <?php $hintergrundbild = get_field('hintergrundbild'); ?>
    <?php if ($hintergrundbild) : ?>
         background-image: url('<?php echo esc_url($hintergrundbild['url']); ?>');
     <?php else: ?>
         background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-header.jpg');
     <?php endif; ?>
     ">
    <div class="pt-lg-6 pt-4 <?php echo $overlap ?>">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center pb-6">
                            <h1 class="small-underline-center"><?php the_field( 'headline_h1' ); ?></h1>
                            <p><?php the_field( 'lead_text' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php if ( have_rows( 'text_links_rechts' ) ) : ?>
	<?php while ( have_rows( 'text_links_rechts' ) ) : the_row(); ?>
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php if ( have_rows( 'text_links' ) ) : ?>
			<?php while ( have_rows( 'text_links' ) ) : the_row(); ?>
                 <div class="mb-lg-6 mb-4 px-3">
                    <h2 class="h4"><?php the_sub_field( 'headline' ); ?></h2> 
                   <p><?php the_sub_field( 'text' ); ?></p>
                </div>
				
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
               
                
                
            </div>
            <div class="col-lg-4">
                <?php if (get_field('bild_overlap') == 1) : ?>
                    <div class="text-center overlap-img" style="">
                        <?php $overlap_img = get_sub_field('overlap_img'); ?>
                        <?php $size = 'img_teaser'; ?>
                        <?php if ($overlap_img) : ?>
                            <?php echo wp_get_attachment_image($overlap_img, $size, "", array('class' => 'img-fluid')); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4">
                <?php if ( have_rows( 'text_rechts' ) ) : ?>
			<?php while ( have_rows( 'text_rechts' ) ) : the_row(); ?>
				<div class="mb-lg-6 mb-4 px-3">
                    <h2 class="h4"><?php the_sub_field( 'headline' ); ?></h2> 
                   <p><?php the_sub_field( 'text' ); ?></p>
                </div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
            </div>
        </div>
    </div>
</section>
	<?php endwhile; ?>
<?php endif; ?>



<?php require("inc/flexible-content.php"); ?>



<?php
get_footer();
