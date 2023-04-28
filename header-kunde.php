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
            
            

<div id="stickyhelp"></div>
