const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/web.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/web.scss', 'public/css');