const mix = require('laravel-mix');
const glob = require('glob');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.scripts(glob.sync('resources/js/*.js'), 'public/js/all.js');

mix.browserSync({
    host: 'localhost',
    proxy: {
        target: "http://localhost",
        ws: true
    },
    browser: "google chrome",
    files: [
        './**/*.css',
        './app/**/*',
        './config/**/*',
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
        './routes/**/*'
    ],
    watchOptions: {
        usePolling: true,
        interval: 100
    },
    open: "external",
    reloadOnRestart: true
});

glob.sync('resources/sass/*.scss').map(function (file) {
    mix.sass(file, 'public/css/tmp').options({
        processCssUrls: false,
    })
    .styles(glob.sync('public/css/tmp/*.css'), 'public/css/style.css');
});