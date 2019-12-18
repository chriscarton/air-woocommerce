<?php
# quelques notes (ce fichier n'est pas utilisé par un include ou require) 

# Dans functions.php
function custom_nav_menu_item($item){
    $item->icon = get_post_meta(
        $item->ID,
        '_menu_item_icon',
        true
    );
    return $item;
}
add_filter('wp_setup_nav_menu_item','custom_nav_menu_item');

/*

When the user submits the form from the menu's administration page, the following callback will store the fields' values in the database:

*/

function custom_update_nav_menu_item
(
    $menu_id,
    $menu_item_db_id,
    $menu_item_args
){
    if(is_array($_POST['menu-item-icon'])){
        $menu_item_args['menu-item-icon'] = $_POST['menu-item-icon'];
        update_post_meta(
            $menu_item_db_id,
            '_menu_item_icon',
            sanitize_html_class($menu_item_args['menu-item-icon'])
        );
    }
}
add_action('wp_update_nav_menu_item','custom_update_nav_menu_item',10,3)


?>