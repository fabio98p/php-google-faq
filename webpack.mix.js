let mix = require('laravel-mix');


mix.sass('src/master.scss', 'assets/css/master.css').options({
    processCssUrls: false
});