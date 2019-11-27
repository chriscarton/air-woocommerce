# Hello Wordpress 

## Utilisation webpack / sass 

## Configuration WordPress (Permalinks)

Settings -> Permalinks 
Change to Post Name (SEO Friendly)

Il se peut que le fichier *.htaccess* ne soit pas accessible. Dans ce cas il faut copier / coller manuellement les instructions données par l'administration dans un fichier *.htaccess à la racine. 

Ou bien **on ne s'emmerde pas** et on fait un chmod 0777 -R sur le dossier de travail 

### Configuration Apache 

Toujours pour que les permalinks fonctionnent et qu'on puisse accéder à ceci sans tomber sur une 404 : 

    http://localhost/air-woocommerce/bonjour-tout-le-monde/

Éditer le fichier de config : 

    sudo subl /etc/apache2/apache2.conf

Chercher :

    <Directory var/www>

Et changer :

    AllOverwrite All

Enfin, redémarrer Apache : 

    sudo services apache2 restart

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

    npm run watch

Pour compiler : 

    npm run prod

# Materialize 

Sur : 

    https://materializecss.com/getting-started.html

Choisir sass, télécharger et dézipper dans *src*, pour pouvoir utiliser la version sass de materialize.

Dans app.scss, faire : 

    @import './materialize/sass/materialize.scss';

materialize.scss importe des composants scss d'un sous dossier. 

Rien de nous empeche de faire par exemple : 

    @import './materialize/sass/materialize.scss';

Avec nos propres imports pour ne prendre que ce dont on a besoin.

# À suivre 

Pour la suite, et notamment la création d'un thème, voir : 

    wp-content/themes/air/README.md

Bonne journée.