# Création de ce theme

## Documentation

Il y a notamment ceci qui peut nous aider : 

    https://codex.wordpress.org/Theme_Development

Mais surtout cette vidéo qui explique la création d'un thème et l'intégration de Woocommerce : 

    https://www.youtube.com/watch?v=TlmDsU8GirU&list=LLMu0vRvLYK43GXeF1BgbsYA&index=4&t=0s

## Let's go 

Créer un dossier dans wp-content/themes 

Par exemple : 

    **air-theme**

Dans ce dossier, on peut y placer un *screenshot.png*

Dans un fichier *style.css* : 

    /*
    Theme Name: Twenty Thirteen
    Theme URI: http://wordpress.org/themes/twentythirteen
    Author: the WordPress team
    Author URI: http://wordpress.org/
    Description: The 2013 theme for WordPress takes us back to the blog, featuring a full range of post formats, each displayed beautifully in their own unique way. Design details abound, starting with a vibrant color scheme and matching header images, beautiful typography and icons, and a flexible layout that looks great on any device, big or small.
    Version: 1.0
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
    Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
    Text Domain: twentythirteen

    This theme, like WordPress, is licensed under the GPL.
    Use it to make something cool, have fun, and share what you've learned with others.
    */

Ou en version très *light* : 

/*
Theme Name: Air Woocommerce Theme
Author : Chris Carton
*/

Créer : 

index.php
functions.php
header.php
footer.php
front-page.php
page.php
single.php
archive.php
404.php

# Settings 

Créer une page *Homepage*

Dans *Réglages, lecture*, changer **"La page d'accueil affiche"**

    Une page statique. 

Et choisir *Homepage*

# Pour récupérer l'éditeur classique 

Chercher dans **plugins** "classic editor" 


# Webpack 

Créer *package.json*

    {
        "private": true,
        "scripts": {
            "dev": "npm run development",
            "development": "cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
            "watch": "npm run development -- --watch",
            "watch-poll": "npm run watch -- --watch-poll",
            "hot": "cross-env NODE_ENV=development node_modules/webpack-dev-server/bin/webpack-dev-server.js --inline --hot --config=node_modules/laravel-mix/setup/webpack.config.js",
            "prod": "npm run production",
            "production": "cross-env NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
        },
        "devDependencies": {
            "axios": "^0.19",
            "cross-env": "^5.1",
            "laravel-mix": "^4.0.7",
            "lodash": "^4.17.13",
            "resolve-url-loader": "^2.3.1",
            "sass": "^1.15.2",
            "sass-loader": "^7.1.0"
        }
    }

Et webpack.mix.js 

    const mix = require('laravel-mix');

    /*
    |--------------------------------------------------------------------------
    | Mix Asset Management
    |--------------------------------------------------------------------------
    |
    | Mix provides a clean, fluent API for defining some Webpack build steps
    | for your Laravel application. By default, we are compiling the Sass
    | file for the application as well as bundling up all the JS files.
    |
    */

    mix.js('src/app.js', './')
        .sass('src/app.scss', './');

Créer : 
    
    src/app.js 
    src/app.scss

Installer les dépendances : 

    npm install 

Lancer webpack : 


