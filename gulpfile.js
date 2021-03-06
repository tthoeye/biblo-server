var elixir = require('laravel-elixir');




/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'bower_components': './vendor/bower_components/',
    'jquery':           './vendor/bower_components/jquery/',
    'bootstrapTable':   './vendor/bower_components/bootstrap-table/dist/',
    'fontawesome':      './vendor/bower_components/fontawesome/',
    'baseScripts':      './resources/assets/scripts/'
};


elixir(function(mix) {

    mix.copy(paths.bower_components + 'bootstrap/fonts/bootstrap/**', 'public/fonts/bootstrap')

        .copy(paths.bower_components + 'normalize.css/normalize.css', 'public/css/normalize.css')

        .copy([
            paths.bower_components  + 'bootstrap/dist/css/bootstrap.css'
        ], 'public/css/bootstrap-table.css')

        .copy([
            paths.bower_components  + 'chosen/chosen.min.css'

        ], 'public/css/chosen.css')

        .sass('app.scss', 'public/css/')

        .scripts([
            paths.jquery    + "dist/jquery.js",
            paths.bower_components + 'bootstrap/dist/js/bootstrap.js'
        ], 'public/js/app.js', './')

        .scripts([
            paths.bower_components  + 'chosen/chosen.jquery.min.js',

        ], 'public/js/admin.js', './')

        .scripts("resources/assets/scripts/*", 'public/js/script.js', './')


        .version([
            'public/css/app.css',
            'public/css/bootstrap-table.css',
            'public/css/normalize.css',
            'public/css/chosen.css',
            'public/js/app.js',
            'public/js/admin.js',
            'public/js/script.js'
        ])
});