const mix = require('laravel-mix');

    mix.js('resources/js/app.js', 'public/js');
    mix.sass('resources/css/style.scss', 'public/css');
    mix.browserSync({
        proxy: 'http://localhost/project4mtak/'
    });







    