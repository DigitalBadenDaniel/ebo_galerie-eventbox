<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mindstudios
 */
?>
<footer>
    <div class="py-lg-5 py-4" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-eb@2x.jpg'); background-size:cover;">
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p><a class="h4 mb-3" href="tel:+4976644040744">+49 7664 40 40 744</a></p>
                        <div class="mb-4">
                        <a class="btn-eb-light btn mx-4 mb-3 mb-lg-0" href="https://event-box.de/kontakt">Jetzt kontaktieren</a>
                        <a class="btn-eb btn mb-3 mb-lg-0" href="https://buchen.event-box.de/">Wunschtermin prüfen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center"> <img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <span class="px-2"><img class="mr-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg"> Pünktliche Lieferung</span>
                        <span class="px-2"><img class="mr-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg"> Datenschutz</span>
                        <span class="mx-2"><img class="mr-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg"> Käuferschutz</span>
                        <span class="mx-2"><img class="mr-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg"> Sichere SSL-Verschlüsselung</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-5">
                    <a class="px-2" href="https://event-box.de/kontakt/impressum" target="blank">Impressum</a>
                    <a class="px-2" href="https://event-box.de/kontakt/datenschutz" target="blank">Datenschutz</a>
                    <a class="px-2" href="https://event-box.de/kontakt/wp-content/uploads/2022/07/agb-event-box.pdf" target="blank">AGB</a>
                    <a class="px-2" href="https://event-box.de/kontakt/faq" target="blank">FAQ</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-12">
                <p class="text-center mb-0 small" style="filter:grayscale(1); opacity: 0.7">Made with <span style="filter:grayscale(1)">❤</span> by <a href="https://digitalbaden.de/" target="blank">Digital Baden</a></p>
            </div>
        </div>
    </div>
</footer>


</div><!-- #page -->


<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/aos.js"></script>
<script>
    AOS.init();
    
</script>

</body>
</html>
