let mix = require('laravel-mix');

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
var coreui_vendor = 'vendor/coreui/coreui-admin-template/Vue_Full_Project';

// mix.copyDirectory(coreui_vendor + '/static/img', 'public/static/img')
//    .copy(coreui_vendor + '/static/img/logo.png', 'resources/assets/img/logo.png')
//    .copyDirectory(coreui_vendor + '/scss', 'resources/assets/sass')
//    .copyDirectory(coreui_vendor + '/src', 'resources/assets/js/admin');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
