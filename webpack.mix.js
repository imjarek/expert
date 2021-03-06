const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/bootstrap.js', 'public/js')

mix.sass('resources/sass/sbsland/landing-page.scss', 'public/css');

mix.scripts(['./node_modules/bootstrap/dist/**/*'], 'public/vendor/bootstrap.min.js');

mix.copyDirectory('resources/img', 'public/img');

if (process.env.NODE_ENV == 'production'){
  mix.version();
}