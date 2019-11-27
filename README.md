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

## Anatomie du thème Twenty Twenty :  

    Le thème de base de cette version de WordPress (5.3) est assez bien foutu (Twenty Twenty)

    Dans : wp-content/themes/twentytwenty

Fichiers principaux : 

    404.php
    comments.php
    footer.php
    functions.php
    header.php
    index.php
    screenshoot.png
    searchform.php
    singular.php
    style-rtl.css
    style.css

On a un dossier **assets** avec notamment : 

    fonts/inter/inter-italic-var.woff2
    fonts/inter/inter-upright-var.woff2

On a un dossier **template-parts** qui contient : 

    content-cover.php
    content.php
    entry-author-bio.php
    entry-header.php
    featured-image.php
    footer-menus-widgets.php
    modal-menu.php
    modal-search.php
    navigation.php
    pagination.php

Et il y a un fichier readme.txt qui contient quelques indications. 

## Création d'un theme

### Documentation

Il y a notamment ceci qui peut nous aider : 

    https://codex.wordpress.org/Theme_Development

Mais surtout cette vidéo qui explique la création d'un thème et l'intégration de Woocommerce : 

    https://www.youtube.com/watch?v=TlmDsU8GirU&list=LLMu0vRvLYK43GXeF1BgbsYA&index=4&t=0s

### Let's go 

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