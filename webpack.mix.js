const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css').options({
    processCssUrls: false
});

mix.js('resources/js/app.js', 'public/js');



