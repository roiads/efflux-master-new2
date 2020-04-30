const mix = require('laravel-mix');

mix.options({
   hmrOptions: {
      host: 'localhost',
      port: 8081,
   }
});

// // fix css files 404 issue
mix.webpackConfig({
   devServer: {
      proxy: {
         host: '127.0.0.1',
         port: 8081
      },
      watchOptions: {
         aggregateTimeout: 200,
         poll: 5000
      },

   }
});

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/web.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/web.scss', 'public/css');