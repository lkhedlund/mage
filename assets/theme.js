import importAllFiles from './build/utils';

// Load theme files
require('./scss/theme.scss');

// Vue Files
// require('./js/vue/example');

// Require all images in the assets/images folder
importAllFiles(require.context('./images', false, /\.(png|jpe?g|gif|svg)$/));