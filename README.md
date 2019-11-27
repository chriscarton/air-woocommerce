## Création de ce theme

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