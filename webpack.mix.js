const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .styles(['resources/views/admin/assets/css/bootstrap.min.css'], 'public/backend/assets/css/bootstrap.min.css')
    // .styles(['resources/views/admins/assets/css/plugins/toastr/toastr.min.css'], 'public/backend/assets/css/plugins/toastr/toastr.css')
    // .styles(['resources/views/admins/assets/js/plugins/gritter/jquery.gritter.css'], 'public/backend/assets/js/plugins/gritter/jquery.gritter.css')
    .styles(['resources/views/admin/assets/css/animate.css'], 'public/backend/assets/css/animate.css')
    .styles(['resources/views/admin/assets/css/style.css'], 'public/backend/assets/css/style.css')

    .scripts(['resources/views/admin/assets/js/jquery-3.1.1.min.js'], 'public/backend/assets/js/jquery-3.1.1.js')
    .scripts(['resources/views/admin/assets/js/popper.min.js'], 'public/backend/assets/js/popper.js')
    .scripts(['resources/views/admin/assets/js/bootstrap.js'], 'public/backend/assets/js/bootstrap.js')
    .scripts(['resources/views/admin/assets/js/inspinia.js'], 'public/backend/assets/js/inspinia.js')
    .scripts(['resources/views/admin/assets/js/login.js'], 'public/backend/assets/js/login.js')

    .copyDirectory('resources/views/admin/assets/css/patterns', 'public/backend/assets/css/patterns')
    .copyDirectory('resources/views/admin/assets/css/plugins', 'public/backend/assets/css/plugins')
    .copyDirectory('resources/views/admin/assets/js/plugins', 'public/backend/assets/js/plugins')
    .copyDirectory('resources/views/admin/assets/font-awesome', 'public/backend/assets/font-awesome')
    .copyDirectory('resources/views/admin/assets/fonts', 'public/backend/assets/fonts')
    .copyDirectory('resources/views/admin/assets/img', 'public/backend/assets/img')

    .options({
        processCssUrls: false
    })
    .version()
;
