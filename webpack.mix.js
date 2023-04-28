let mix = require('laravel-mix');

/**
 * @see https://laravel-mix.com/docs/6.0/api
 */

mix.js('assets/js/custom.js', '')
    .sass('assets/scss/style.scss', '')
    .sass('assets/scss/editor.scss', '')
    .sass('assets/scss/login.scss', '')
    .browserSync({
        proxy: process.env.MIX_BROWSERSYNC_URL,
        files: ['**/*.*'],
        ignore: ['node_modules', '.git', '.idea', '.sass-cache', 'bower_components', 'vendor', 'yarn.lock', 'package.json', 'composer.*'],
        serveStatic: [{
            route: ['/wp-content/themes/mindstudios/assets'],
            dir: 'assets'
        }]
    })
    .options({
        processCssUrls: false
    })
    .sourceMaps(false)
    .setPublicPath('assets/dist');