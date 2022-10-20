let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'dist').setPublicPath('dist');
mix.copyDirectory('resources/js/tinymce_6.2.0/tinymce/js/tinymce', 'public/js/tinymce');
