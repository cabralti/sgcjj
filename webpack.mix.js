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
    // ADMIN
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
    .scripts(['resources/views/admin/assets/js/scripts.js'], 'public/backend/assets/js/scripts.js')

    .copyDirectory('resources/views/admin/assets/css/patterns', 'public/backend/assets/css/patterns')
    .copyDirectory('resources/views/admin/assets/css/plugins', 'public/backend/assets/css/plugins')
    .copyDirectory('resources/views/admin/assets/js/plugins', 'public/backend/assets/js/plugins')
    .copyDirectory('resources/views/admin/assets/font-awesome', 'public/backend/assets/font-awesome')
    .copyDirectory('resources/views/admin/assets/fonts', 'public/backend/assets/fonts')
    .copyDirectory('resources/views/admin/assets/img', 'public/backend/assets/img')

    // SITE
    .styles('resources/views/site/assets/css/style.css', 'public/frontend/assets/css/style.css')
    .styles('resources/views/site/assets/css/style-pdf.css', 'public/frontend/assets/css/style-pdf.css')
    .styles('resources/views/site/assets/css/bootstrap.min.css', 'public/frontend/assets/css/bootstrap.min.css')
    .styles([
        'resources/views/site/assets/css/bootstrap.min.css',
        'resources/views/site/assets/css/classy-nav.css',
        'resources/views/site/assets/css/owl.carousel.min.css',
        'resources/views/site/assets/css/animate.css',
        'resources/views/site/assets/css/magnific-popup.css',
        'resources/views/site/assets/css/font-awesome.min.css',
    ], 'public/frontend/assets/css/libs.css')
    .styles('resources/views/site/assets/css/custom.css', 'public/frontend/assets/css/custom.css')
    .copyDirectory('resources/views/site/assets/fonts', 'public/frontend/assets/fonts')
    .copyDirectory('resources/views/site/assets/js/plugins', 'public/frontend/assets/js/plugins')

    .scripts(['resources/views/site/assets/js/jquery/jquery-2.2.4.min.js'], 'public/frontend/assets/js/jquery/jquery-2.2.4.min.js')
    .scripts(['resources/views/site/assets/js/bootstrap/popper.min.js'], 'public/frontend/assets/js/bootstrap/popper.min.js')
    .scripts(['resources/views/site/assets/js/bootstrap/bootstrap.min.js'], 'public/frontend/assets/js/bootstrap/bootstrap.min.js')
    // .scripts(['resources/views/site/assets/js/plugins/plugins.js'], 'public/frontend/assets/js/plugins/plugins.js')
    .scripts(['resources/views/site/assets/js/typeahead.js'], 'public/frontend/assets/js/typeahead.js')
    .scripts(['resources/views/site/assets/js/active.js'], 'public/frontend/assets/js/active.js')
    .scripts(['resources/views/site/assets/js/scripts.js'], 'public/frontend/assets/js/scripts.js')

    // LIBS
    .scripts(['resources/views/libs/jquery.mask.js'], 'public/libs/jquery.mask.js')

    .options({
        processCssUrls: false
    })
    .version()
;
