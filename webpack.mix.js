let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
  .extract([
    'lodash',
    'popper.js',
    'jquery',
    'bootstrap',
    'select2',
    'axios',
    'vue',
  ])
  .sass('resources/assets/sass/app.scss', 'public/css')
  .styles('node_modules/select2/dist/css/select2.css', 'public/css/select2.css');
