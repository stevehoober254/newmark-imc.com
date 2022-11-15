const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(
    [
        "public/css/fontawesome.min.css",
        "public/css/bootstrap.css",
        "public/css/jquery.fancybox.min.css",
        "public/css/styles.css",
        "public/css/main.css",
        "public/css/navigation.css",
        "public/css/responsive.css",
    ],
    "public/css/main.min.css"
)
    .babel(
        [
            "public/js/jquery.min.js",
            "public/js/bootstrap.bundle.min.js",
            "public/js/select2.min.js",
            "public/js/mobile-detect.js",
            "public/js/fontawesome.js",
            "public/js/navigation.js",
            "public/js/jquery.fancybox.min.js",
            "public/js/scripts.js",
        ],
        "public/js/main.min.js"
    )
    .browserSync("127.0.0.1:8000");
