<?php

/**
 * Manage required and suggested plugins

require(__DIR__ . DIRECTORY_SEPARATOR . 'tgmpa/class-tgm-plugin-activation.php');

$plugins = apply_filters('mindstudios_plugins', json_decode(file_get_contents(get_template_directory() . '/plugins.json'), true));

add_action( 'tgmpa_register', function() use ($plugins) {
    $config = [
        'id'           => 'mindstudios',             // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'mindstudios-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    ];

    $plugins = array_map(function($plugin) {
        if ($plugin['required'] === true) {
            $plugin['force_activation'] = true;
            $plugin['force_deactivation'] = true;
        }
        return $plugin;
    }, $plugins);

    tgmpa( $plugins, $config );
});

/**
 * Some plugins share the same name with others in the official wordpress directory.
 * Thus, we get update notifications for plugins we didn't install.

add_filter('site_transient_update_plugins', function($value) use ($plugins) {
    foreach ($plugins as $plugin) {
        if (@$plugin['update'] === false) {
            unset($value->response[$plugin['slug'] . '/' . $plugin['slug'] . '.php']);
        }
    }
    return $value;
});
 * 
 */