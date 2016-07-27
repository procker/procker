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

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts([
        'procker.module.js',
        'procker.controller.js',
        'project/project.module.js',
        'project/project.controller.js'
    ],'public/js/app.js').scripts([
        '../../../node_modules/angular/angular.js'
    ],'vendor.js');
});
