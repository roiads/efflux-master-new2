const mix = require('laravel-mix');
/*mix.webpackConfig({
   devServer: {
      proxy: {
         '*': 'http://localhost:8000/'
      }
   }
});

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/web.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css');*/

mix.js('resources/material-dashboard/js/app.js', 'public/js/material-dashboard')