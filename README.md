# [Mage](https://github.com/lkhedlund/mage)

Mage is a WordPress starter theme based on Sage 8, with Webpack 4, Gutenberg theming, a Vue option, and more!

## Requirements

| Prerequisite       | How to check | How to install
| ------------------ | ------------ | ------------- |
| PHP >= 5.4.x       | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js >= 6.9     | `node -v`    | [nodejs.org](http://nodejs.org/) |

## Features

* npm build script that compiles Sass, JavaScript, optimizes images, and concatenates and minifies files
* [Bootstrap](http://getbootstrap.com/)
* [Theme wrapper](https://roots.io/sage/docs/theme-wrapper/)
* Gutenberg Ready
* Multilingual ready

## Theme installation

Install Mage by copying the project into a new folder within your WordPress themes directory.

Building the theme requires [node.js](http://nodejs.org/download/). Update to the latest version of npm with `npm install -g npm@latest`.

From the command line:

1. Navigate to the theme directory, then run `npm install`
3. Run `npm run build` to compile your assets

You now have all the necessary dependencies to run the build process.

### Available build commands

* `npm run watch` — Compile assets when file changes are made
* `npm run build` — Compile assets for production (no source maps).

## Theme setup

Edit `lib/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, post formats, and sidebars.

### Theme Development

Gutenberg adjustments will need to be made in both assets and php. The `scss/blocks/_utilities.scss` file pulls theme colors from Bootstrap variables. These can be matched with the Editor Color Palette theme support in `gutenberg.php` to create theme-specific colours.

## Contributing

Contributions are welcome from everyone!