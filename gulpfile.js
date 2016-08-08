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
    mix.sass(['app.scss','projects.scss','noteboard.scss']);
    mix.scripts([
        'projects/projects.module.js',
        'projects/projects.controller.js',
        'project/project.module.js',
        'project/project.controller.js',
        'noteboard/noteboard.controller.js',
        'procker.module.js',
        'procker.controller.js'
    ],'public/js/app.js').scripts([
        '../../../node_modules/angular/angular.js'
    ],'public/js/vendor.js');
});
