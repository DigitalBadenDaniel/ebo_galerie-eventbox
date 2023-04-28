<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mindstudios
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <meta name="google-site-verification" content="d7vDtkTHt6-ZJiFkodBGrpL-kjWjz0Q7Pqy5w7gMkbY" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php if (function_exists('gtm4wp_the_gtm_tag')) gtm4wp_the_gtm_tag(); ?>
        <?php wp_body_open(); ?>
        
        
        
        <div id="page">
            
            
            <header id="sticky" class="site-header position-relative">
                <div id="service-sticky" class="bg-color-1 d-xl-block d-none">
            <div class="container">
                <div class="row flex-row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-xl p-lg-0 justify-content-end w-100 ">
                        <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'service',
                                    'depth' => 2,
                                    'container' => 'div',
                                    'container_class' => ' main-nav desktop-service',
                                    'container_id' => 'header_nav_service',
                                    'menu_class' => 'navbar-nav',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
                <div class=" d-flex align-items-center py-lg-2 py-2  position-relative">
                <div class="container">
                    <div class="row flex-row align-items-center">
                        <div class="col-xl-2 col-5">
                              <a href="<?= site_url() ?>" class="site-branding">
                                    <img class="mobile-logo-height mb-2  d-lg-block d-none" src="<?= mindstudios_asset('img/logo.svg') ?>" alt="<?= get_bloginfo('name') ?>">
                                    <img class="mobile-logo-height   d-lg-none d-block " src="<?= mindstudios_asset('img/logo-small.svg') ?>" alt="<?= get_bloginfo('name') ?>">
                                </a><!-- .site-branding -->
                        </div>

                        <div class="col-xl-10 col-7">                          
                           
                            <nav class="navbar navbar-expand-xl p-lg-0 justify-content-end justify-content-end">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'header',
                                    'depth' => 2,
                                    'container' => 'div',
                                    'container_class' => 'collapse navbar-collapse main-nav desktop-nav',
                                    'container_id' => 'header_nav_primary',
                                    'menu_class' => 'navbar-nav',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                                
                            
                                
                            <a class="btn-xs float-right btn btn-eb d-xl-inline d-none ml-4 confetti-button" href="https://buchen.event-box.de/" target="blank">Wunschtermin prüfen</a>
                           
                            </nav>
                            <div class="d-block d-xl-none  mb-lg-0 float-right">
                            <div onclick="openNav()">
                                <img src="<?= mindstudios_asset('img/burger.svg') ?>">
                            </div>
                            </div>
                        </div>
                       
                        
                        
                    </div>
                </div>
                </div>
                <!---------------- The overlay -->
                <div id="myNav" class="overlay">
                    <!-- Button to close the overlay navigation -->
                    <div class="container-fluid my-4">
                        <div class="d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-center">
                            <a href="<?= site_url() ?>" class="site-branding mb-4 mb-lg-0">
                                <img class="mobile-logo-height" src="<?= mindstudios_asset('img/logo-small.svg') ?>" alt="<?= get_bloginfo('name') ?>">
                            </a><!-- .site-branding -->

                            <div class="d-lg-none mb-4 mb-lg-0">
                                <a style="padding:0;" href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img class="float-right" src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg"></a>            
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row mt-5 mb-3">
                                <div class="col-12">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'header',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'main-nav mobile-nav',
                                        'container_id' => 'header_nav_primary',
                                        'menu_class' => 'navbar-nav',
                                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker' => new WP_Bootstrap_Navwalker(),
                                    ));
                                    ?>
                                   
                                    <hr>
                                    <?php
                                wp_nav_menu(array(
                                        'theme_location' => 'service',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'main-nav mobile-nav',
                                        'container_id' => 'header_nav_primary',
                                        'menu_class' => 'navbar-nav',
                                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker' => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12">
    <a class="btn btn-eb" href="https://buchen.event-box.de/" target="blank">Wunschtermin prüfen</a>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-2">
                                    <a class="mobile-link" href="tel:+49 7664/ 40 40 744">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/m-phone.svg">
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a class="mobile-link" href="mailto:kontakt@event-box.de">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/m-mail.svg">
                                    </a>
                                </div>
                                
                            </div>         
                        </div>
                    </div>



                    <script>
                        /* Open when someone clicks on the span element */
                        function openNav() {
                            document.getElementById("myNav").style.width = "100%";
                        }

                        /* Close when someone clicks on the "x" symbol inside the overlay */
                        function closeNav() {
                            document.getElementById("myNav").style.width = "0%";
                        }
                    </script>
                    
                    
          
           

            </header><!-- #masthead -->
<script>
            
                    $(document).on("scroll", function () {
                        if
                            ($(document).scrollTop() > 1) {
                            $("#sticky").addClass("sticky");
                             $("#stickyhelp").addClass("stickyhelp");
                        } else
                        {
                            $("#sticky").removeClass("sticky");
                             $("#stickyhelp").removeClass("stickyhelp");
                        }
                    });
          </script>
<div id="stickyhelp"></div>
