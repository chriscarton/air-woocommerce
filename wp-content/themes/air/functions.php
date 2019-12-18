<?php 

require_once('functions-admin.php');

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function carton_register_style($file){
    wp_register_style(
        $file,
        get_template_directory_uri().'/'.$file.'.css',
        '',
        1,
        'all'
    );
    wp_enqueue_style($file);
}

function load_stylesheets()
{

    carton_register_style('style');
        carton_register_style('app');
    /*
    wp_register_style(
        'stylesheet',
        get_template_directory_uri().'/style.css',
        '',
        1,
        'all'
    );
    wp_enqueue_style('stylesheet');

    wp_register_style(
        'custom',
        get_template_directory_uri().'/app.css',
        '',
        1,
        'all'
    );
    wp_enqueue_style('custom');
    */

}
add_action('wp_enqueue_scripts','load_stylesheets');


function load_javascript(){
    wp_register_script(
        'custom',
        get_template_directory_uri().'/app.js',
        'jquery',
        1,
        true
    );
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_script','load_javascript');



add_theme_support('menus');

register_nav_menus([
    'top-menu'=>'Top Menu'
]);

add_theme_support('post-thumbnails');

//Add image sizes
add_image_size('post_image',1100,750,false);

//Import des custom walkers...

require_once('walkers/custom_walker_nav_menu.php');
?>