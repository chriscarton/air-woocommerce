# Avant toute chose 

## Lancer NPM 

    //bien se placer dans le dossier du thème
    npm run watch

## Refresh the page

    CTRL + F5 (de préférence)

## wp-config.php

Définir ces constantes pour **développer** avec plus de **sérénité** : 

    define('WP_DEBUG', true);
    define('WP_CACHE', false);

## Chrome Dev Tools 

    F12 > Network > Disable Cache

# Anatomie du thème Twenty Twenty :  

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

Qui est une typo plutôt sympa...

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

# Création de ce theme (Air)

## Documentation

Il y a notamment ceci qui peut nous aider : 

    https://codex.wordpress.org/Theme_Development

Mais surtout cette vidéo qui explique la création d'un thème et l'intégration de Woocommerce : 

    https://www.youtube.com/watch?v=TlmDsU8GirU&list=LLMu0vRvLYK43GXeF1BgbsYA&index=4&t=0s

## Let's go 

Créer un dossier dans wp-content/themes 

Par exemple : 

    air

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

## Settings 

Créer une page *Homepage*

Dans *Réglages, lecture*, changer **"La page d'accueil affiche"**

    Une page statique. 

Et choisir *Homepage*

## Pour les images (en dur)

    <?php bloginfo('template_directory');?>
    <img src="<?php bloginfo('template_directory');?>/images/logo.png">

## Theme Support 

Dans *functions.php*

    add_theme_support('menus');

## Utiliser des menus 
    
Pour déclarer un menu, dans *functions.php*

    register_nav_menus([
        'top-menu'=>'Top Menu'
    ]);

Pour utiliser ce menu dans le theme : 

<?php 
    wp_nav_menu([
        'theme_location'=>'top-menu'
    ]);
?>

Il existe un plugin 

    Force Regenerate Thumbnails


## Wordpress Basic Loop : 

    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            the_content();
            //ou bien : 
            /*
                the_title( '<h2>', '</h2>' ); 
                the_post_thumbnail(); 
                the_excerpt();
            */
        endwhile; 
    endif;

Voir pour des exemples plus détaillés : 

    https://developer.wordpress.org/themes/basics/the-loop/

# WP Queries 

Using wp_reset_query() restores the WP_Query and global $post data to the original main query. You MUST use this function to reset your loop if you use query_posts() within your loop. You can use it after custom loops with WP_Query because it actually calls wp_reset_postdata() when it runs. However, it’s best practice to use wp_reset_postdata() with any custom loops involving WP_Query.

<?php wp_reset_query(); ?>