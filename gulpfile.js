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
    mix.sass('laravel.scss', 'public/css', {
            includePaths: [
                elixir.config.bowerDir + "/bootstrap-sass-official/assets/stylesheets",
                elixir.config.bowerDir + "/font-awesome/scss"
            ]
       })
       .version("css/laravel.css")
       .publish(
            'jquery/dist/jquery.min.js',
            'public/js/vendor/jquery.js'
       )
       .publish(
            'bootstrap-sass-official/assets/javascripts/bootstrap.js',
            'public/js/vendor/bootstrap.js'
       )
       .publish(
            'font-awesome/fonts',
            'public/fonts'
       );
});
