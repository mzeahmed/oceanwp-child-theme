let mix = require('laravel-mix');

mix.setPublicPath('dist');
mix.sass('./assets/sass/admin.scss', 'styles');
mix.js('./assets/admin/admin.js', 'js');
mix.sass('./assets/sass/app.scss', 'styles');
mix.js('./assets/js/app.js', 'js');
mix.copy('./assets/images', 'dist/images');