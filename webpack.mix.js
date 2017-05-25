const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js(['resources/assets/js/admin/modify-delete-image.js',
        'resources/assets/js/admin/use-slick.js'],
        'public/js/admin/modify-image-and-slick.js');


mix.js('resources/assets/js/admin/left-side-bar.js', 'public/js/admin/left-side-bar.js');

mix.js('resources/assets/js/web/layout/navbar-nav-pick.js', 'public/js/web/layout/navbar-pick.js');