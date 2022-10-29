const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build')
    .setPublicPath('/build')
    .disableSingleRuntimeChunk()
    .addEntry('scripts', [
        './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    ])
    .addStyleEntry('styles', [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './assets/css/prooxle.css',
    ])

module.exports = Encore.getWebpackConfig()
