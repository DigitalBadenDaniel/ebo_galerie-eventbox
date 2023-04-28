<?php
/*
  Template Name: Kundenseite
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

 ?>
<?php require("header-kunde.php"); ?>
<style>
    .photobooth-gallery > .container > .row > .col-xs-12 > p {
        display: none;
    }
    .photobooth-gallery {
        background-color: #fff0!important;
    }
</style>
<div style="background-color:<?php the_field( 'hintergrundfarbe' ); ?>; padding: 0px 0px 200px 0px;
<?php $hintergrund_bild_optional = get_field( 'hintergrund-bild_optional' ); ?>
<?php if ( $hintergrund_bild_optional ) : ?>
        background-image: url('<?php echo esc_url( $hintergrund_bild_optional['url'] ); ?>'); background-size: cover;
<?php endif; ?>
        ">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 p-0">
            <div class="text-center">
                <?php $header_img = get_field( 'header-img' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $header_img ) : ?>
                    <?php echo wp_get_attachment_image( $header_img, $size, false, ["class"=>"img-fluid"] ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 p-0">
            <div class="text-center my-4">
                <p class="color-white text-center">Bitte gebe den 8-stelligen Code ein. Diesen findest Du auf deinem Ausdruck.</p>
                <?php echo do_shortcode('[photobooth-gallery settings="Event-Box Online-Galerie"]'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 p-0">
            <div class="text-center">
                <?php $footer_img = get_field( 'footer-img' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $footer_img ) : ?>
                    <?php echo wp_get_attachment_image( $footer_img, $size, false, ["class"=>"img-fluid"] ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>

<div class="py-lg-3 py-3">
<?php require("inc/flexible-content.php"); ?>
</div>


<?php require("foote-kunde.php"); ?>
