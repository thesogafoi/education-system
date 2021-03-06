const mix = require("laravel-mix");

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
mix.copy("node_modules/uikit/dist/js/uikit.min.js", "public/js/uikit.min.js");
mix.copy(
    "node_modules/uikit/dist/js/uikit-icons.min.js",
    "public/js/uikit-icons.min.js"
);

mix.js("resources/js/front/app.js", "public/js/front").sass(
    "resources/sass/app.scss",
    "public/css"
);
