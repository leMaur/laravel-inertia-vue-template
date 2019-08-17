const mix = require('laravel-mix')
const path = require('path')
const purgeCss = require('laravel-mix-purgecss')

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss')('./tailwind.config.js'),
    require('postcss-nesting'),
    require('autoprefixer'),
  ])
  .webpackConfig({
    output: {chunkFilename: 'js/[name].js?id=[chunkhash]'},
    resolve: {
      alias: {
        vue$: 'vue/dist/vue.runtime.esm.js',
        '@': path.resolve('resources/js'),
      },
    },
  })
  .purgeCss()
  .version()
  .sourceMaps()
