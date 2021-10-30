const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build')
    .setPublicPath('/build')
    .disableSingleRuntimeChunk()
    .addEntry('scripts', [
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
    ])
    .addStyleEntry('styles', [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './assets/css/cover.css',
    ])

module.exports = Encore.getWebpackConfig()