<?php
/**
 * mindstudios functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mindstudios
 */

if(!defined('ABSPATH')) return; // Prevent direct access

define('MINDSTUDIOS_ENABLE_ANIMATIONS', true); // Enable AOS?
define('MINDSTUDIOS_RECOMMEND_PLUGINS', true); // Prompt to install commonly used plugins across projects
define('MINDSTUDIOS_DISABLE_COMMENTS', true); // Disable commenting function
define('MINDSTUDIOS_RECOMMEND_PLUGINS', true); // Prompt to install commonly used plugins across projects

/**
 * Global template functions
 */
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/common.php';


add_action('after_setup_theme', function() {
    register_nav_menus([
        'header' => esc_html__( 'Header', 'mindstudios' ),
        'service' => esc_html__( 'Service', 'mindstudios' ),
        'footer' => esc_html__( 'Footer', 'mindstudios' ),
        'rechtlich' => esc_html__( 'Rechtlich', 'mindstudios' )
    ]);

    // Ratio calculator
    // https://codepen.io/sandwichplease/pen/GRrKwEe
    mindstudios_add_image_size(800, 1, 1, [1.25, 2, 2.5, 4], false);
     mindstudios_add_image_size(800, 1, 1.025, [1.25, 2, 2.5, 4], false);
    
    mindstudios_add_image_size(1200, 3, 1, [1.25, 1.5, 2, 3], false);
    mindstudios_add_image_size(800, 3, 2, [1.25, 2, 2.5, 4], false);
    mindstudios_add_image_size(1300, 1, 2, [1.25, 2, 4], false);
    mindstudios_add_image_size(1300, 1, 2.018, [1.25, 2, 4], false);
    mindstudios_add_image_size(2000, 16, 9, [1.25, 1.6, 2, 2.5, 4, 5], false);
    add_image_size( 'overlap_img', 600, 400, true );
    add_image_size( 'header_img', 600);
    add_image_size( 'img_teaser', 750);
    add_image_size( 'logo', 300);
});

/**
 * Enqueue scripts and styles.
 *
 * @note
 * Default handles loaded from common.php:
 *
 * - jquery (3.2.1)
 * - bootstrap (4.3)
 * - popper.js
 * - aos (if animations enabled)
 */
add_action( 'wp_enqueue_scripts', function() {

     wp_deregister_script('jquery');
    wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false, '1.10.2', true);
    wp_enqueue_script('jquery');
    
    wp_register_style('theme', mindstudios_asset('dist/css/style.css'));
    wp_enqueue_style('theme');

    wp_register_script('theme', mindstudios_asset('dist/custom.js'), ['jquery', 'aos'], null, true);
    wp_enqueue_script('theme');
    
     wp_register_script('simple-parallax', mindstudios_asset('dist/simpleParallax.min.js'),  null, true);
    //wp_enqueue_script('simple-parallax');
    
    wp_register_script('rellax', mindstudios_asset('dist/rellax.min.js'), null, true);
    //wp_enqueue_script('rellax');
    
  
    
     wp_register_script('slick-slider', mindstudios_asset('dist/slick.min.js'),  null, true);
    wp_enqueue_script('slick-slider');
    
    

    
    wp_register_script('init', mindstudios_asset('dist/init.js'), null, true);
    wp_enqueue_script('init');
    
    
    
       
    wp_register_script('fancybox', mindstudios_asset('dist/jquery.fancybox.js'));
    //wp_enqueue_script('fancybox');  
    
   
});

/**
 * Initialize widgets
 */
add_action( 'widgets_init', function() {
    $register = function($name, $id) {
        register_sidebar( array(
            'name'          => $name,
            'id'            => $id,
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="has-regular-font-size font-weight-bolder mb-4">',
            'after_title'   => '</h2>',
        ) );
    };

    $register('Footer 1', 'footer_1');
    $register('Footer 2', 'footer_2');
    $register('Footer 3', 'footer_3');
});

/* Entfernt den Menüpunkt „Beiträge“ aus dem WordPress Menü */
function post_remove ()      
{ 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');
/* Entfernt den Menüpunkt „Beiträge“ aus der Werkzeugleiste */
function remove_wp_nodes() 
{
    global $wp_admin_bar;   
    $wp_admin_bar->remove_node( 'new-post' );
    $wp_admin_bar->remove_node( 'new-link' );
    $wp_admin_bar->remove_node( 'new-media' );
}
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );


/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) { 
	//add_image_size( 'page-intro', 700, 450, true ); //(cropped)
       // add_image_size( 'anwendung', 700, 500, true ); //(cropped)
        //add_image_size( 'anlage', 700, 700, true ); //(cropped)
       // add_image_size( 'referenz-logo', 450); //(cropped)
        //add_image_size( 'page-intro-width', 700); //(cropped)      
       // add_image_size( 'projekt', 500, 300, true ); //(cropped)
}

function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');



add_filter( 'gform_progressbar_start_at_zero', '__return_true' );