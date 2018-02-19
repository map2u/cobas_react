const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const extractCSS = new ExtractTextPlugin('[name].fonts.css');
const extractSCSS = new ExtractTextPlugin('[name].styles.css');

const BUILD_DIR = path.resolve(__dirname, 'build');
const SRC_DIR = path.resolve(__dirname, 'src');

console.log('BUILD_DIR', BUILD_DIR);
console.log('SRC_DIR', SRC_DIR);

module.exports = (env = {}) => {
  return {
    entry: {
      index: [SRC_DIR + '/index.js']
    },
    output: {
      path: BUILD_DIR,
      filename: '[name].bundle.js'
    },
    // watch: true,
    devtool: env.prod ? 'source-map' : 'cheap-module-eval-source-map',
    devServer: {
      contentBase: BUILD_DIR,
      //   port: 9001,
      compress: true,
      hot: true,
      open: true
    },
    module: {
      rules: [
        {
          test: /\.(js|jsx)$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
            options: {
              cacheDirectory: true,
              presets: ['react', 'env']
            }
          }
        },
        {
          test: /\.html$/,
          loader: 'html-loader'
        },
        {
          test: /\.(scss)$/,
          use: ['css-hot-loader'].concat(extractSCSS.extract({
            fallback: 'style-loader',
            use: [
              {
                loader: 'css-loader',
                options: {alias: {'../img': '../public/img'}}
              },
              {
                loader: 'sass-loader'
              }
            ]
          }))
        },
        {
          test: /\.css$/,
          use: extractCSS.extract({
            fallback: 'style-loader',
            use: 'css-loader'
          })
        },
        {
          test: /\.(png|jpg|jpeg|gif|ico)$/,
          use: [
            {
              // loader: 'url-loader'
              loader: 'file-loader',
              options: {
                name: './img/[name].[hash].[ext]'
              }
            }
          ]
        },
        {
          test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
          loader: 'file-loader',
          options: {
            name: './fonts/[name].[hash].[ext]'
          }
        }]
    },
    plugins: [
      new webpack.HotModuleReplacementPlugin(),
      new webpack.optimize.UglifyJsPlugin({sourceMap: true}),
      new webpack.NamedModulesPlugin(),
      extractCSS,
      extractSCSS,
      new HtmlWebpackPlugin(
        {
          inject: true,
          template: './public/index.html'
        }
      ),
      new CopyWebpackPlugin([
          {from: './public/img', to: 'img'}
        ],
        {copyUnmodified: false}
      )
    ]
  };
};

var Encore = require('@symfony/webpack-encore');

Encore
        // the project directory where compiled assets will be stored
        .setOutputPath('public/build/')
        // the public path used by the web server to access the previous directory
        .setPublicPath('/build')
        .cleanupOutputBeforeBuild()
        .enableSourceMaps(!Encore.isProduction())
        // uncomment to create hashed filenames (e.g. app.abc123.css)
        .enableVersioning(Encore.isProduction())
        // first, install any presets you want to use (e.g. yarn add babel-preset-es2017)
        // then, modify the default Babel configuration
 //      .configureBabel(function (babelConfig) {
//            // add additional presets
  //           babelConfig.presets.push('es2016');
//
//            // no plugins are added by default, but you can add some
//            // babelConfig.plugins.push('styled-jsx/babel');
 //      })

    
  //      .enableTypeScriptLoader()

        .enableReactPreset()
        // uncomment to define the assets of the project
      //  .addEntry('js/app', './assets/js/app.js')
   //     .addEntry('js/sidebar', './assets/js/sidebar.js')
   //     .addEntry('js/bootstrap', './node_modules/bootstrap/dist/js/bootstrap.min.js')
     //   .addEntry('js/sidebar-v2', './node_modules/sidebar-v2/js/ol3-sidebar.min.js')
     //   .addEntry('js/jquery-sidebar', './node_modules/sidebar-v2/js/jquery-sidebar.min.js')
   //     .addStyleEntry('js/ol3-sidebar', './assets/js/ol3-sidebar.js')
      //  .addEntry('js/map', './assets/js/map3.js')
        .addEntry('js/app', './react/index.js')
        .addStyleEntry('css/app', './react/scss/style.scss')
   //     .addStyleEntry('css/left-sidebar', './react/scss/stylesheet.scss')
        .addStyleEntry('css/ol3-sidebar', './react/scss/ol3-sidebar.scss')
     //   .addStyleEntry('css/left-sidebar', './assets/scss/left-sidebar.scss')
  //      .addEntry('css/bootstrap', './node_modules/bootstrap/dist/css/bootstrap.min.css')
//        .addEntry('css/sidebar-v2', './node_modules/sidebar-v2/scss/ol3-sidebar.scss')
   //     .addStyleEntry('css/admin', './assets/scss/admin.scss')
        .addStyleEntry('css/font-awesome', './react/scss/font-awesome/font-awesome.scss')

        // uncomment if you use Sass/SCSS files
        .enableSassLoader(function (options) {
            //   https://github.com/sass/node-sass#options,
            // options.includePaths = [...]
            //  options.includePaths =['js/app']
        })
        // uncomment for legacy applications that require $/jQuery as a global variable
        .autoProvidejQuery()
        ;
       

module.exports = Encore.getWebpackConfig();