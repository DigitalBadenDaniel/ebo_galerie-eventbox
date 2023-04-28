<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Include an asset from the /assets directory and append a version string too.
 * @param $asset string relative to /assets path (without leading slash)
 * @return string URL with version string appended
 */
function mindstudios_asset($asset) {
    $file = trailingslashit(get_stylesheet_directory()) . 'assets/' . $asset;
    if (file_exists($file)) {
        $mtime = filemtime($file);
        return trailingslashit(get_stylesheet_directory_uri()) . 'assets/' . $asset . "?v=$mtime";
    } else {
        return null;
    }
}

/**
 * @param $base int Base width for this aspect ratio. (see $base_is_smallest)
 * @param $aspect_x int To get a 4:3 image, you'd set 4 for x, and 3 for y.
 * @param $aspect_y int To get a 4:3 image, you'd set 4 for x, and 3 for y.
 * @param array $multipliers Array of floats in order to present higher resolution images. e.g. [2, 2.5, 3]
 * @param bool $base_is_smallest Indicates whether the base size is the lowest size possible or not.
 */
function mindstudios_add_image_size($base, $aspect_x, $aspect_y, $multipliers = array(), $base_is_smallest = true) {
    sort($multipliers);

    if ($base_is_smallest !== false) {
        $base = array_reverse($multipliers)[0] * $base;
    }

    add_image_size( "{$aspect_x}_{$aspect_y}", $base, ceil($base / $aspect_x * $aspect_y), true);

    foreach ($multipliers as $multiplier) {
        if ($base_is_smallest !== true) {
            $multiplier = round(1 / $multiplier, 1);
        }
        add_image_size( "{$aspect_x}_{$aspect_y}@{$multiplier}x", $base * $multiplier, ceil($base * $multiplier / $aspect_x * $aspect_y), true);
    }
};