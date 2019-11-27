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

# À suivre 

Pour la suite, et notamment la création d'un thème, voir : 

    wp-content/themes/air/README.md

Bonne journée.