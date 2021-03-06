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

# Get Template Directory Uri

Peut-être utile dans plein de cas de figure : 

    <img src="<?= get_template_directory_uri() ?>/images/no-posts.png" alt="Mon image!">

Mais aussi pour inclure des fichiers php : 

    require_once(get_template_directory().'/admin/air-admin.php');

# Les catégories 

Les catégories peuvent être un peu *tricky* à afficher parce que **celles qui sont vides n'apparaissent tout simplement pas**. Il faut utiliser le paramètre *hide_empty* :

    //Comme ceci : 
    wp_list_categories([
        'hide_empty' => 0
    ]);

    //Ou comme ça
    $categories = get_categories([
        'hide_empty' => 0
    ]);

C'est pareil avec **get_tags()** il faut passer hide_empty à 0. Mais on va y venir...

# Récupérer des tags 

Voilà en gros comment récupérer et afficher des tags. 

    $all_tags = get_tags(['hide_empty' => 0]);        
    if(!empty($all_tags)):
        foreach($all_tags as $tag):
            $url = get_tag_link($tag->term_id);
            ?>
            <a
                class="tag-link" 
                href="<?= $url ?>"
            >
                #<?= ucfirst($tag->name) ?>
            </a>
            &nbsp;
            <?php
        endforeach;
    endif;

# Template Hierarchy 

Pour l'instant j'ai ça : 

    404.php
    archive.php
    category.php
    front-page.php
    single.php
    search.php

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

# Elementor 

Oh, je sais qu'on va y venir. 

    https://www.wpcrafter.com/make-wordpress-theme-compatible-elementor/

Bon voilà c'est une vidéo à regarder *"How To Make Any WordPress Theme Compatible With Elementor"*. 

# Créer une page de recherche

Creer *search.php* et *searchform.php* (à la racine du thème). 

*searchform.php* est un bête formulaire : 

    <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <div>
            <label>Rechercher : </label>
            <input 
                type="search" 
                class="search-field" 
                placeholder="Votre recherche" 
                value="" 
                name="s" 
                title="Votre recherche" 
            />
            <input type="submit" class="search-submit" value="C'est parti" />
        </div>
    </form>

C'est *search.php* qui est spécial. Déjà c'est une *template page* : 

    <?php
    /*
    Template Name: Search Page
    */
    ?>

Ça signifie que pour que le tout fonctionne, il faut se rendre dans l'admin, et créer une page *Search* avec le slug *search-page*. Il faut par ailleurs lui attribuer le **modèle de page Search Page**. 

Pour traiter les données : 

    //On récupère une requête globale :
    global $wp_query;

    //Ça c'est le nombre de résultats
    $total_results = $wp_query->found_posts;

    //Mais pour avoir les résultats eux-même, on utilise une boucle avec $wp_query : 
    if($wp_query->have_posts()):
        while($wp_query->have_posts()): $wp_query->the_post();
        ?>

        <?php //ici des choses comme the_title() sont directement accessibles. ?>
        <?php //Et aussi the_permalink() pour faire les liens vers les résultats ?>

        <?php
        endwhile;
    endif;

Petite parenthèse on peut lier directement la page de recherche (n'importe ou) : 
    
    <a href="http://localhost/air-woocommerce/search-page/">
        Loupiote!
    </a>
    //Avec le slug ça marche

Il y a une pagination à mettre (parce que ça récupère que 10 résultats)
Et là on en vient au point suivant : 

# Passer des variables à get_template_part 

Il suffit de faire **ça** :

    set_query_var('query', $wp_query);
    get_template_part('parts/pagination');

# Passage par référence (PHP)

A cool trick : 

    <?php
    function foo(&$var) {
        $var++;
    }
    $a=5;
    foo ($a);
    // $a vaut 6 maintenant
    ?>