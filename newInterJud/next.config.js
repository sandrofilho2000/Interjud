/* @type {import('next').NextConfig} */
const webpack = require('webpack');
module.exports = {
  reactStrictMode: true,
  trailingSlash: true,
  reactStrictMode: true,
  assetPrefix: '.',
  images: {
    deviceSizes: [640, 750, 828, 1080, 1200, 1920, 2048, 3840],
    imageSizes: [16, 32, 48, 64, 96, 128, 256, 384],
    loader: 'akamai',
    path: '/',
  },

  webpack: function (config){
    config.plugins.push(new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery'
    }))
  
    return config;
  }
}
