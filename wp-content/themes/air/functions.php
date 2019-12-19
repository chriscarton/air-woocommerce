<?php 

require_once('functions-admin.php');

require_once('functions/debug.php');

require_once('functions/CartonApp.php');

require_once('functions/CPT.php');
require_once('functions/cpts.php');

require_once('QueryBuilder/CartonQueryBuilder.php');

$CartonApp = new CartonApp();

$CartonApp->setStyles(['style','app']);
$CartonApp->setScripts(['app']);

//Fuck yes
# https://wordpress.stackexchange.com/questions/48085/add-action-reference-a-class/48094
/*
    Ça veut dire qu'on peut passer des instances de classe 
    Et des méthodes à appeler 
    À des hooks WordPress 
*/
add_action('wp_enqueue_scripts',[$CartonApp,'loadStyles']);
add_action('wp_enqueue_scripts',[$CartonApp,'loadScripts']);

add_theme_support('menus');

register_nav_menus([
    'top-menu'=>'Top Menu'
]);

add_theme_support('post-thumbnails');

//Add image sizes
add_image_size('post_image',1100,750,false);


//Import des custom walkers...
require_once('walkers/custom_walker_nav_menu.php');

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('air', get_template_directory() . '/languages');
}
?>