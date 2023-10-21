// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/app/bootstrap.js', 'public/js')
    .js('resources/js/vendor.js', 'public/js')
    .js('resources/js/app/address.js', 'public/js')
    .js('resources/js/app/plugins.js', 'public/js')
    .js('resources/js/app/jquery.min.js', 'public/js')
    .js('resources/js/tinymce_init.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/bootstrap.min.css', 'public/css')
    .css('resources/css/style.css', 'public/css')
    .copyDirectory('resources/lib', 'public/lib')
    .copyDirectory('resources/img', 'public/img')
    //admin layout component and style
    .js('resources/js/admin/app.js', 'public/admin/js')
    // .css('resources/css/admin/style.css', 'public/admin/css')
    .copy('resources/css/admin/nucleo-icons.css', 'public/admin/css/')
    .copy('resources/css/admin/nucleo-svg.css', 'public/admin/css/')
    .copyDirectory('resources/fonts', 'public/fonts')
    .copyDirectory('resources/js/admin', 'public/js/admin')
    .postCss('resources/css/admin/material-dashboard.css', 'public/admin/css', [
        //
    ])
    // .sass('resources/sass/app.scss', 'public/css')
    // .sass('resources/scss/bootstrap.scss', 'public/css')
    .sourceMaps();

mix.webpackConfig({
        stats: {
            children: false, //true if want to check warning on npx mix
        },
    });