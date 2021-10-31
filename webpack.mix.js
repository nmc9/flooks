const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css/app.css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

// mix.postCss('resources/css/app.css', 'public/css');
mix.postCss('resources/css/base.css', 'public/css/app.css');
mix.postCss('resources/css/changelists.css', 'public/css/app.css');
mix.postCss('resources/css/custom.css', 'public/css/app.css');
mix.postCss('resources/css/customCSS.css', 'public/css/app.css');
mix.postCss('resources/css/dashboard.css', 'public/css/app.css');
mix.postCss('resources/css/fonts.css', 'public/css/app.css');
mix.postCss('resources/css/forms.css', 'public/css/app.css');
mix.postCss('resources/css/login.css', 'public/css/app.css');
mix.postCss('resources/css/override.css', 'public/css/app.css');
mix.postCss('resources/css/rtl.css', 'public/css/app.css');
mix.postCss('resources/css/tempCSS.css', 'public/css/app.css');
mix.postCss('resources/css/widgets.css', 'public/css/app.css');
