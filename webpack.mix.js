const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
.vue()
.postCss('resources/css/app.css', 'public/css')
.sourceMaps();


mix.copyDirectory('resources/js/scripts', 'public/js/scripts');
// mix.styles('resources/css/main.css', 'public/css/main.css');