const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const path = require("path");
const dist = path.resolve(__dirname, '../../dist');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const MinifyPlugin = require('babel-minify-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: {
        theme: './assets/theme.js',
        blocks: './assets/scss/blocks.scss',
        editor: './assets/scss/editor.scss',
    },
    output: {
        filename: '[name].js',
        path: dist,
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader, 
                    "css-loader", 
                    "sass-loader"
                ],
            },
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader, 
                    "css-loader",
                ],
            },
            {
                test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/,
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]',
                    outputPath: 'fonts/'
                }
            },
            {
                test:  /\.(jpe?g|png|gif)$/,
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]',
                    outputPath: 'images/'
                }
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({ 
            filename: "[name].css", 
            allChunks: true 
        }),
        new MinifyPlugin(),
        new CleanWebpackPlugin(),
        new CopyWebpackPlugin({
			patterns: [
				{ from: 'assets/images', to: 'images' }
			]   
		})
    ],
    optimization: {
        minimizer: [
          new OptimizeCSSAssetsPlugin({})
        ]
    },
};