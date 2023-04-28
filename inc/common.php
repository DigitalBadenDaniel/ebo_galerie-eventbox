<?php

/**
 * Set defaults
 */
if(!defined('MINDSTUDIOS_ENABLE_ANIMATIONS'))
    define('MINDSTUDIOS_ENABLE_ANIMATIONS', false); // Enable AOS?

if(!defined('MINDSTUDIOS_RECOMMEND_PLUGINS'))
    define('MINDSTUDIOS_RECOMMEND_PLUGINS', true); // Prompt to install commonly used plugins across projects

if(!defined('MINDSTUDIOS_DISABLE_COMMENTS'))
    define('MINDSTUDIOS_DISABLE_COMMENTS', true); // Disable commenting function

if(!defined('MINDSTUDIOS_ADD_EDITORSTYLE'))
    define('MINDSTUDIOS_ADD_EDITORSTYLE', true); // Add basic editor style inherited from theme (editor.scss)

/**
 * This file includes common functions for all mindstudios based theme
 * Its purpose is to be a drop-in replacement for every theme, so it may not break existing ones.
 */

add_action('after_setup_theme', function() {
    add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head.
    add_theme_support( 'title-tag' ); // Let WordPress manage the document title.
    add_theme_support( 'post-thumbnails' ); // Enable support for Post Thumbnails on posts and pages.

    load_theme_textdomain('mindstudios', get_template_directory() . '/languages');

    /**
     * Register Custom Navigation Walker
     */
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
});

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js', [], null, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', ['jquery'], null, true);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3/dist/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');

    if(MINDSTUDIOS_ENABLE_ANIMATIONS === true) {
        wp_register_style('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css', [], null);
        wp_register_script('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js', [], null, true);
        wp_enqueue_style('aos');
        wp_enqueue_script('aos');
    }
});

function mindstudios_login_style() {
    if (mindstudios_asset('img/logo.svg') !== null) {
        wp_enqueue_style('mindstudios-login', mindstudios_asset('dist/login.css'));
    }
}
add_action( 'login_enqueue_scripts', 'mindstudios_login_style' );

if (function_exists( 'acf_add_options_page')) {
    acf_add_options_page( array(
        'page_title'	=> 'Theme-Einstellungen',
        'menu_title'	=> 'Footer',
        'menu_slug' 	=> 'acf-theme',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
    ));
}

/**
 * Add option to format links as buttons
 */
add_filter( 'mce_buttons_2', function($buttons) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
} );

add_filter( 'tiny_mce_before_init', function ($init_array) {
    $style_formats = [
        [
            'title' => 'Button',
            'selector' => 'a',
            'classes' => 'btn btn-primary'
        ]
    ];
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;
});

/**
 * Recommend plugins based on plugins.json in this theme
 */
if(MINDSTUDIOS_RECOMMEND_PLUGINS) {
    require(__DIR__ . DIRECTORY_SEPARATOR . 'plugins.php');
}

/**
 * Registers an editor stylesheet for the theme.
 */
if(MINDSTUDIOS_ADD_EDITORSTYLE) {
    add_editor_style('assets/dist/editor.min.css');
}

/**
 * Disable comments
 */
if(MINDSTUDIOS_DISABLE_COMMENTS) {
    include_once get_template_directory() . '/inc/disable-comments.php';
}


