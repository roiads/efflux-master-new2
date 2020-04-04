# Easy Install Guide

### Dependancies

- PHP 7.4
- NodeJs
- Composer
- Laravel 7
- VueJs 
- VueX 
- Vue-Router

### Getting Started

*copy the repo  and cd to the project*
```bash
git clone https://github.com/nickolastuttle/Efflux-Master.git
cd ./Efflux-Master/
```

*Install the dependencies*
```bash
composer install
npm install
```

*Build the project with 1 of the following*
```bash
# this will include all developement esential packages and continue to watch all files in /resources/* for changes
# once a change is detected, the js and css and assets with be compiled and positioned on the fly without having to rebuild
npm run watch

#build with telescope, tinker, and other providers to help in development without reloading on resource changes
npm run dev

#minimized js and css, complete cross-env and without the development tools
npm run prod
```

*Start a local instance of the site - http://127.0.0.1:8000*
```bash
php artisan serve
```
