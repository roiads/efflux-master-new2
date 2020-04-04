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
# this will continure to watch all files in /resources/* for changes, 
# once change is detected, the js and css and assets with be compiled and positioned
npm run watch

#build with telescope, tinker, and other providers to help in development 
npm run dev

#minimized js and css, complete cross-env for without the dev-tools
npm run prod
```

*Start a local instance of the site - http://127.0.0.1:8000*
```bash
php artisan serve
```
