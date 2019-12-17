<?php 

//Créer une page admin

# Source : 
//https://www.youtube.com/watch?v=pTegcB9zMSM&list=PLriKzYyLb28kpEnFFi9_vJWPf5-_7d3rX&index=5

# Mais tout ça c'est vraiment tiré par les cheveux... 
// Il y a beaucoup trop de répétitions... 
// Est-ce que je pourrais faire une classe ? 
// Est-ce qu'il y aurait des boiler-plates sur github ? 


function carton_add_admin_page(){
    add_menu_page(
        'Air Theme Options',
        'Air',
        'manage_options',
        'air',
        'air_theme_create_page',
        'dashicons-admin-customizer',
        110
    );

    //Créer un sous-menu : 
    //Mais en fait c'est la même qu'au dessus
    add_submenu_page(
        'air',
        'Air Theme Options',
        'Settings',
        'manage_options',
        'air',
        'air_theme_create_page'
    );

    add_submenu_page(
        'air',
        'Air CSS Options',
        'Custom CSS',
        'manage_options',
        'air_css',
        'air_theme_css_options'
    );

    add_action('admin_init','air_custom_settings');
}

function air_custom_settings(){
    //Ce "nom" (air-settings-group) sera réinjecté dans le formulaire
    register_setting('air-settings-group','first_name');
    add_settings_section(
        'air-sidebar-options',
        'Sidebar Options',
        'air_sidebar_options',
        'air'
    );
}


add_action('admin_menu','carton_add_admin_page');

//Page générale (première page)
function air_theme_create_page(){
    //On peut utiliser des templates/vues ici
    ?>
    <h1>Settings</h1>
    <?php

}

function air_theme_css_options(){
    //On peut utiliser des templates/vues ici
    //Ok là j'ai bien mon template
    require_once(get_template_directory().'/admin/air-admin.php');
    
}





?>