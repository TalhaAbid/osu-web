
/**
 * As our first step, we'll pull in the user's webpack.mix.js
 * file. Based on what the user requests in that file,
 * a generic config object will be constructed for us.
 */

const path = require('path');
require(path.resolve(__dirname, 'node_modules/laravel-mix/src/index'));
Mix.paths.setRootPath(path.resolve(__dirname));
require(Mix.paths.mix());

/**
 * Just in case the user needs to hook into this point
 * in the build process, we'll make an announcement.
 */

Mix.dispatch('init', Mix);

/**
 * Now that we know which build tasks are required by the
 * user, we can dynamically create a configuration object
 * for Webpack. And that's all there is to it. Simple!
 */

let WebpackConfig = require(path.resolve(__dirname, 'node_modules/laravel-mix/src/builder/WebpackConfig'));

module.exports = new WebpackConfig().build();
