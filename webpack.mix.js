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

//to do - stop having to use this false thing
mix.options({ processCssUrls: false })
   .js('resources/assets/js/theme.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version();
