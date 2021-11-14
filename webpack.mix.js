const mix = require("laravel-mix");

const VuetifyLoaderPlugin = require("vuetify-loader/lib/plugin");

const webpackConfig = {
    plugins: [new VuetifyLoaderPlugin()],
    stats: { children: true },
};

mix.webpackConfig(webpackConfig);

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

mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "public/css", []);
