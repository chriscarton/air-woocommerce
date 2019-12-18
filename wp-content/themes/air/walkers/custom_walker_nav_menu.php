<?php

//Mon tout premier walker personnalisé ! 

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

    public $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    );


    /* 
        
        start_lvl et end_lvl 
        ne se déclenchent que 
        s'il y a des imbrications
        dans le menu
        
    */ 

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<div class="level level-'.$depth.'">';
    }

    
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</div>";
    }

    
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<div class="menu-item">';
            $output .= '<a href='.$item->url.'>';
            $output .= $item->title;
            $output .= '</a>';
        $output .= '</div>';
    }

    
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "";
    }

}