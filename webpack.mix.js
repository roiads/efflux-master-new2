const mix = require('laravel-mix');
const path = require('path');
mix.webpackConfig({
   devServer: {
      proxy: {
         '*': 'http://localhost:8000/'
      }
   }
});

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');