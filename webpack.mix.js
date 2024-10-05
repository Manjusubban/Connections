let mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js/app.js')
   .css('resources/css/app.css', 'public/css/app.css')
   .css('resources/css/quill.snow.css', 'public/css/quill.snow.css');


